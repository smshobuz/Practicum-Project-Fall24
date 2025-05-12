@extends('backend.master')

@section('rent')
<div class="container">
    <h1>Best Performing Teams</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Team Name</th>
                <th>Average Performance Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>
                        @if($team->players->isNotEmpty())
                            {{ round($team->players->first()->avg_score, 2) }}
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
