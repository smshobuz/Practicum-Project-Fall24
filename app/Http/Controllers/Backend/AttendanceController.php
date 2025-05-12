<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Player;
use App\Models\TrainingSchedule;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
   public function view() {
        $attendances = Attendance::with(['player', 'training'])->paginate(10);
        return view('backend.pages.attendanceview', compact('attendances'));
    }
    public function create()
    {
        $players = Player::all();
        $trainings = TrainingSchedule::all();
        return view('backend.pages.attendanceform', compact('players', 'trainings'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'player_id' => 'required|exists:players,id',
            'training_id' => 'required|exists:trainings,id',
            'date' => 'required|date',
            'status' => 'required|boolean',
        ]);

        Attendance::create($request->all());
        return redirect()->route('attendanceview');
    }

}
