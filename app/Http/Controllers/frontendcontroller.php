<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
   public function loginPage()
   {
    return view('login');
   }
   public function homePage()
   {
    return view('Home');
   }
}
