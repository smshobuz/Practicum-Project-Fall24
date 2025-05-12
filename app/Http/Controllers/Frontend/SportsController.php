<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function view()
    {

        $sports=Sport::all();
        return view('frontend.pages.sports',compact('sports'));
        
    }


}


