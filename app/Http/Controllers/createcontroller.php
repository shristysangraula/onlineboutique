<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createcontroller extends Controller
{
   public function create(){
   	return view('front.create');
   }
}
