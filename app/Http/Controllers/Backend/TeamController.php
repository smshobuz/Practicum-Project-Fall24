<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Display the list of teams
    public function team()
    {
        $teams = Team::all();
        return view('backend.pages.team_store', compact('teams'));
    }

    public function create()
    {
        return view('backend.pages.team_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'min_age' => 'nullable|integer|min:0',
            'max_age' => 'nullable|integer|min:0',
            'subscription_fee' => 'required|numeric|min:0',
        ]);

        Team::create($request->all());

        return redirect()->route('teamb')->with('success', 'Team created successfully.');
    }

    public function edit($id)
    {
        $teams = Team::find($id);
        return view('backend.pages.team_edit', compact('teams'));
    }

    public function update(Request $request, $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'min_age' => 'nullable|integer|min:0',
        'max_age' => 'nullable|integer|min:0',
        'subscription_fee' => 'required|numeric|min:0',
    ]);

    // Find the team by ID and update it with validated data
    $team = Team::findOrFail($id);
    $team->update($validatedData);

    // Redirect back with a success message
    return redirect()->route('teamb')->with('success', 'Team updated successfully.');
}

    public function delete($id)
    {
        $teams = Team::find($id);
        $teams->delete();

        return redirect()->route('teamb')->with('success', 'Team deleted successfully.');
    }
}
