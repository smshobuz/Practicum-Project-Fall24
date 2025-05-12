<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PlayingSchedule;
use Illuminate\Http\Request;

class PlayingController extends Controller
{
    public function view(){
        $playing=PlayingSchedule::all();
        return view('frontend.pages.playing',compact('playing'));
    }
}
