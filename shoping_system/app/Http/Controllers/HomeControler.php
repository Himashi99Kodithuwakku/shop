<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
   public function home(){
    return view('include.products');
   }
}
