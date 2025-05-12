<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::with('player')->paginate(10);
        return view('admin.pages.subscriptions.index', compact('subscriptions'));
    }

    public function create()
    {
        $players = Player::all();
        return view('admin.pages.subscriptions.create', compact('players'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'player_id' => 'required|exists:players,id',
            'start_date' => 'required|date',
        ]);

        $startDate = $request->start_date;
        $endDate = date('Y-m-d', strtotime('+1 year', strtotime($startDate)));

        Subscription::create([
            'player_id' => $request->player_id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'status' => 'active',
        ]);

        return redirect()->route('admin.subscriptions.index')->with('success', 'Subscription created successfully.');
    }

    public function edit(Subscription $subscription)
    {
        return view('admin.subscriptions.edit', compact('subscription'));
    }

    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'start_date' => 'required|date',
        ]);

        $startDate = $request->start_date;
        $endDate = date('Y-m-d', strtotime('+1 year', strtotime($startDate)));

        $subscription->update([
            'start_date' => $startDate,
            'end_date' => $endDate,
            'status' => 'active',
        ]);

        return redirect()->route('admin.subscriptions.index')->with('success', 'Subscription updated successfully.');
    }

    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        return redirect()->route('admin.subscriptions.index')->with('success', 'Subscription deleted successfully.');
    }

}
