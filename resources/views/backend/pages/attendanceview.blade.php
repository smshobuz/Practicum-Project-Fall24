@extends('backend.master')

@section('rent')
<div class="container mt-5">
    <h1 class="text-center">Attendance Records</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Player</th>
                <th>Training</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $attendance->id }}</td>
                <td>{{ $attendance->player->name }}</td>
                <td>{{ $attendance->training->name }}</td>
                <td>{{ $attendance->date }}</td>
                <td>{{ $attendance->status ? 'Present' : 'Absent' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $attendances->links() }}
    </div>
</div>
@endsection
