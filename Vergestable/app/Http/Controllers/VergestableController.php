<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vergestable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
class VergestableController extends Controller
{
    //
    public function cart (){
        $vergests  = Vergestable::all();
        return view('cart', compact('vergests'));
    }

    public function shop (){
        $vergests  = Vergestable::all();
        return view('shop', compact('vergests'));
    }

    public function show($id){
        $vergest = Vergestable::find($id);
        return view ('show', compact('vergest'));
    }
    public function destroy($id){
        $vergest = Vergestable::find($id);
        if (File::exists(($vergest->images))){
            File::delete($vergest->images);
        }
        $vergest->delete();
        return view ('shop');
    }

}
