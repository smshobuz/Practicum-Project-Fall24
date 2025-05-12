<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function view(){
        $coach=Member::all();
        return view('frontend.pages.coach',compact('coach'));
    }
}
