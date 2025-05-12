<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TrainingSchedule;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function view(){
        $training=TrainingSchedule::all();
        return view('frontend.pages.training',compact('training'));
    }
}
