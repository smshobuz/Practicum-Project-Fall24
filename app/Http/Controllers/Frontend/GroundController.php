<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ground;
use Illuminate\Http\Request;

class GroundController extends Controller
{
    public function view(){
        $ground=Ground::all();
        return view ('frontend.pages.ground',compact('ground'));
    }
}
