<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $apparels=Product::paginate(4);

        return view('front.home',compact('apparels'));
    }

    public function apparels()
    {
        $apparels=Product::all();
        return view('front.apparels',compact('apparels'));
    }

    public function apparel()
    {
        return view('front.apparel');
    }
}
