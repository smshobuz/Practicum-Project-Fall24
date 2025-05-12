<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sport;

// .
class HomeController extends Controller
{
   
   public function home()
   {
      $sports=Sport::all();
      $sports = Sport::paginate(2); 
    return view('frontend.pages.home',compact('sports')) ;
   }
   public function read_more(){
      return view('frontend.pages.description');
   }
}
