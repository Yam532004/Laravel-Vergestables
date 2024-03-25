<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function home (){
        return view ('home');
    }

    public function shop (){
        return view ('shop');
    }
    public function aboutUs (){
        return view ('aboutUs');
    }
    public function cart (){
        return view ('cart');
    }
    public function contactUs (){
        return view ('contactUs');
    }
}
