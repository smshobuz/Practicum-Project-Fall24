@extends('backend.master')

@section('rent')
<div class="container">
    <h1>Players</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Team</th>
                <th>Subscription Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->age }}</td>
                    <td>{{ $player->team->name ?? 'Unassigned' }}</td>
                    <td>
                        @if($player->isSubscriptionValid())
                            <span class="text-success">Active</span>
                        @else
                            <span class="text-danger">Expired</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('players.show', $player->id) }}" class="btn btn-info btn-sm">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
