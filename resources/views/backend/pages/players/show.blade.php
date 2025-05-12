@extends('backend.master')

@section('rent')
<div class="container">
    <h1>Player Details</h1>
    <p><strong>Name:</strong> {{ $player->name }}</p>
    <p><strong>Age:</strong> {{ $player->age }}</p>
    <p><strong>Team:</strong> {{ $player->team->name ?? 'Unassigned' }}</p>
    <p><strong>Subscription Start:</strong> {{ $player->subscription_start }}</p>
    <p><strong>Subscription End:</strong> {{ $player->subscription_end }}</p>
    <p><strong>Subscription Status:</strong> 
        @if($player->isSubscriptionValid())
            <span class="text-success">Active</span>
        @else
            <span class="text-danger">Expired</span>
        @endif
    </p>
    <a href="{{ route('players.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
