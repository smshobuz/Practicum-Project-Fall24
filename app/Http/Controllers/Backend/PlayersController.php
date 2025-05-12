<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlayersController extends Controller
{
     // List all players
     public function index()
     {
         $players = Player::with('team')->get();
         return view('backend.pages.players.index', compact('players'));
     }
 
     // View a single player and their subscription details
     public function show($id)
     {
         $player = Player::with('team')->findOrFail($id);
         return view('backend.pages.players.show', compact('player'));
     }
 
     // Highlight the best-performing team in each category
     public function bestTeams()
     {
         $teams = Team::with(['players' => function ($query) {
             $query->select('team_id', DB::raw('AVG(performance_score) as avg_score'))
                 ->groupBy('team_id');
         }])->get();
 
         return view('backend.pages.players.best_teams', compact('teams'));
     }
}