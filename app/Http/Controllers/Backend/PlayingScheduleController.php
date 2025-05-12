<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PlayingSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlayingScheduleController extends Controller
{
    public function schedule()
    {
        $schedules=PlayingSchedule::all();
        return view('backend.pages.schedule.playing_schedule_list',compact('schedules'));
    }
    public function create()
    {
        return view('backend.pages.schedule.playing_schedule_create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validation=Validator::make($request->all(),
        [
            'match_name'=>'required',
            'team_one'=>'required',
            'team_two'=>'required',
            'date'=>'required',
            'time'=>'required',
            'location'=>'required',
             
        ]);

 

        PlayingSchedule::create([
            'match_name'=>$request->match_name,
            'team_one'=>$request->team_one,
            'team_two'=>$request->team_two,
            'date'=>$request->date,
            'time'=>$request->time,
            'location'=>$request->location,
        ]);
        return redirect()->back();
    }
    public function delete($id)
    {
        $schedules=PlayingSchedule::find($id);
        $schedules->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $schedules=PlayingSchedule::find($id);
        return view('backend.pages.schedule.schedule_edit',compact('schedules'));
        
    }
    public function update(Request $request,$id){
        PlayingSchedule::find($id)->update([
        'match_name'=>$request->match_name,
            'team_one'=>$request->team_one,
            'team_two'=>$request->team_two,
            'date'=>$request->date,
            'time'=>$request->time,
            'location'=>$request->location,
        ]);
        return redirect()->back();
    }
}
