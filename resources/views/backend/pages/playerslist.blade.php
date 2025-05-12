@extends ('backend.master')
@section('rent')
<div class="container">
    <h1>Players</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Team</th>
                <th>Performance Score</th>
                <th>Subscription Validity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->team->name ?? 'Unassigned' }}</td>
                    <td>{{ $player->performance_score }}</td>
                    <td>{{ $player->subscription_validity ? $player->subscription_validity->format('Y-m-d') : 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection