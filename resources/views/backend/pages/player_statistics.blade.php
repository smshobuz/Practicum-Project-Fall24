@extends('backend.master')

@section('rent')
<div class="container">
    <h1>Team Statistics</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Team</th>
                <th>Performance Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bestTeams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->performance_score }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection