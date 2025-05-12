<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventApplication;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::where('start_time', '>=', now())->get();
        return view('frontend.pages.events.index', compact('events'));
    }

    // Apply for an event
    public function apply(Request $request, $eventId)
    {
        $playerId = auth()->id(); // Assuming the player is logged in

        // Check if the player has already applied
        $alreadyApplied = EventApplication::where('event_id', $eventId)
                            ->where('player_id', $playerId)
                            ->exists();

        if ($alreadyApplied) {
            return redirect()->back()->with('error', 'You have already applied for this event.');
        }

        // Create the application
        EventApplication::create([
            'event_id' => $eventId,
            'player_id' => $playerId,
        ]);

        return redirect()->back()->with('success', 'You have successfully applied for the event.');
    }
}
