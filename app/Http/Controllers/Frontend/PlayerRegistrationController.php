<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PlayerRegistrationController extends Controller
{
    // Show registration form
    public function create()
    {
        $teams = Team::all();
        return view('frontend.pages.player.register', compact('teams'));
    }

    // Handle registration
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:players',
            'date_of_birth' => 'required|date',
            'team_id' => 'required|exists:teams,id',
            'subscription_fee_paid' => 'required|boolean',
        ]);

        $team = Team::findOrFail($request->team_id);
        $playerAge = Carbon::parse($request->date_of_birth)->age;

        // Validate subscription fee based on the selected team
        if (!$request->subscription_fee_paid) {
            return redirect()->back()->withErrors(['subscription' => 'Subscription fee is required to proceed.']);
        }

        // Assign to team if age matches
        if ($playerAge < $team->min_age || ($team->max_age && $playerAge > $team->max_age)) {
            return redirect()->back()->withErrors(['team' => 'Selected team does not match your age.']);
        }

        // Save player
        $player = Player::create([
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'team_id' => $team->id,
            'subscription_start' => now(),
            'subscription_end' => now()->addYear(),
            'subscription_fee_paid' => true,
        ]);

        return redirect()->route('player.success')->with('success', 'Registration successful.');
    }

    // Show success page
    public function success()
    {
        return view('frontend.pages.player.success');
    }
}