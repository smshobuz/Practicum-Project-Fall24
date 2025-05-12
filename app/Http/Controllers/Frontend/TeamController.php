<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    
   public function view(){
    $teams=Team::all();
    return view('frontend.pages.team',compact('teams'));
   }
    
}
