<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TrainingSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainingScheduleController extends Controller
{
    public function tschedule(){
        $alltschedules=TrainingSchedule::paginate(4);
        return view('backend.pages.training_schedule_list',compact('alltschedules'));
    } 
    public function tschedule_list(){
        return view('backend.pages.training_schedule_create');
    }
    public function tschedule_create(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'training_name' => 'required|string|max:255',
            'date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        

        // Check for overlapping trainings
        $overlaptraining = TrainingSchedule::where(function ($query) use ($validated) {
            $query->whereBetween('start_time', [$validated['start_time'], $validated['end_time']])
            ->orWhereBetween('end_time', [$validated['start_time'], $validated['end_time']])
                  ->orWhere(function ($query) use ($validated) {
                      $query->where('start_time', '<=', $validated['start_time'])
                      ->where('end_time', '>=', $validated['end_time']);
                  });
        })->exists();

        if ($overlaptraining) {
            return redirect()->back()->withErrors(['time_slot' => 'The selected time slot overlaps with an existing training schedule.'])->withInput();
        }
        
        TrainingSchedule::create([
            'training_name' => $request->training_name,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'location' => $request->location,
            'description' => $request->description,
        ]);
        return redirect()->route('training_schedule');

        }    
        
        public function delete($id)
        {
            $alltschedules=TrainingSchedule::find($id);
            $alltschedules->delete();
            return redirect()->back();
        }
        public function edit($id)
        {
            $alltschedules=TrainingSchedule::find($id);
            return view('backend.pages.tschedule_edit',compact('alltschedules'));
            
        }
        public function update(Request $request,$id){
            TrainingSchedule::find($id)->update([
           'training_name' => $request->training_name,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'location' => $request->location,
            'description' => $request->description,
            ]);
            return redirect()->route('training_schedule');
        }
    
}
