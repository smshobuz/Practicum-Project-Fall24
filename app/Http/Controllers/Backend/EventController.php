<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function list()
    {
        try {
            // Fetch all events
            $events = Event::all();

            // Return the Blade view with events
            return view('backend.pages.events.list', compact('events'));

        } catch (\Exception $e) {
            // Redirect to an error page or show an error message
            return redirect()->back()->with('error', 'Error fetching events: ' . $e->getMessage());
        }
    }
    
    // Admin creates an event
    public function eventcreate(){

        return view('backend.pages.events.create');
    }
    public function eventstore(Request $request){
       //validation
       $validated= $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);  
        
        // Check for overlapping events
        $overlappingEvent = Event::where(function ($query) use ($validated) {
            $query->whereBetween('start_time', [$validated['start_time'], $validated['end_time']])
                  ->orWhereBetween('end_time', [$validated['start_time'], $validated['end_time']])
                  ->orWhere(function ($query) use ($validated) {
                      $query->where('start_time', '<=', $validated['start_time'])
                            ->where('end_time', '>=', $validated['end_time']);
                  });
        })->exists();

        if ($overlappingEvent) {
            return response()->json([
                'message' => 'The selected time slot overlaps with another event.'
            ], 422);
        }
    // dd($request->all());
    Event::create([
        'name'=>$request->name,
        'description'=>$request->description,
        'start_time'=>$request->start_time,
        'end_time'=>$request->end_time

    ]);
    return redirect()->route('events.list');
    }
    //delete
    public function delete($id)
    {
        $events=Event::find($id);
        $events->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $events=Event::find($id);
        return view('backend.pages.events.update',compact('events'));
        
    }
    public function update(Request $request,$id){
        Event::find($id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
        ]);
        return redirect()->route('events.list');
    }

}
