<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\T_food;
use App\Models\Category;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class VergestableController extends Controller
{
    private $T_food;
    const _PER_PAGE = 4;
    public function __construct()
    {
        $this->T_food = new T_food();
    }
    public function cart(Request $request)
    {
        $keyword = null;
        if (!empty($request->keyword)){
            $keyword = $request->keyword;
        }
        $vergests  = T_food::all();
        $T_food = $this->T_food->getAllFoods( $keyword);
        return view('cart', compact('vergests', 'T_food'));
    }

    public function cartByCategoryId($id)
    {
        $vergests = T_food::where('category_id', $id)->get();

        return view('cart', compact('vergests'));
    }

    public function shop()
    {
        $vergests  = T_food::all();
        return view('shop', compact('vergests'));
    }

    public function show($id)
    {
        $vergest = T_food::find($id);
        return view('show', compact('vergest'));
    }
    public function destroy($id)
    {
        $vergest = T_food::find($id);
        // if (File::exists(($vergest->images))){
        //     File::delete($vergest->images);
        // }
        $vergest->delete();
        $vergests  = T_food::all();
        return view('cart', compact('vergests'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'describles' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'currentPrice' => 'required',
            'amountPrice' => 'required',
            'category' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/create')
                ->withErrors($validator)
                ->withInput();
        }
        $validatedData = $validator->validated();

        $food = new T_food();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $name = time() . "_" . $file->getClientOriginalName();
                $destinationPath = 'images';
                $file->move(public_path($destinationPath), $name);
                $image = $name; // Lưu đường dẫn tương đối
                $food->images = $image;
            }

            // $filePath = $file->store('public/img');

            $food->describles = $validatedData['describles'];
            $food->name = $validatedData['name'];
            $food->currentPrice = $validatedData['currentPrice'];
            $food->amountPrice = $validatedData['amountPrice'];
            $food->category_id = $request->input('category');
            $food->save();
            return redirect('cart')->with('success', 'Add new product Successful!');
        }
    }

    public function edit($id)
    {
        $vergest = T_food::find($id);
        $categories = Category::all();
        return view('edit', compact('vergest', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'describles' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'currentPrice' => 'required',
            'amountPrice' => 'required',
            'category' => 'required',
        ]);

        $food = T_food::findOrFail($id);
        $food->name = $validatedData['name'];
        $food->describles = $validatedData['describles'];
        $food->currentPrice = $validatedData['currentPrice'];
        $food->amountPrice = $validatedData['amountPrice'];
        $food->category_id = $request->input('category');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $name = time() . "_" . $file->getClientOriginalName();
                $destinationPath = 'images';
                $file->move(public_path($destinationPath), $name);
                $image = $name; // Lưu đường dẫn tương đối
                $food->images = $image;
            }
        }

        $food->save();
        $vergest = T_food::find($id);
        return view('show', compact('vergest'));

    }
}
