@extends('backend.master')

@section('rent')
<div class="container mt-5">
    <h1 class="mb-4">Edit Playing schedules</h1>
    <form action="{{ route('schedule.update', $schedules->id) }}" method="POST">
        @csrf
        @method('PUT') 

        <div class="mb-3">
            <label for="match_name" class="form-label">Match Name</label>
            <input type="text" class="form-control" id="match_name" name="match_name" 
                   value="{{ old('match_name', $schedules->match_name) }}" placeholder="Enter match name" required>
        </div>

        <div class="mb-3">
            <label for="team_one" class="form-label">Team One</label>
            <input type="text" class="form-control" id="team_one" name="team_one" 
                   value="{{ old('team_one', $schedules->team_one) }}" placeholder="Enter name of team one" required>
        </div>

        <div class="mb-3">
            <label for="team_two" class="form-label">Team Two</label>
            <input type="text" class="form-control" id="team_two" name="team_two" 
                   value="{{ old('team_two', $schedules->team_two) }}" placeholder="Enter name of team two" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" 
                   value="{{ old('date', $schedules->date) }}" required>
        </div>

        <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="time" class="form-control" id="time" name="time" 
                   value="{{ old('time', $schedules->time) }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" 
                   value="{{ old('location', $schedules->location) }}" placeholder="Enter match location" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('schedule') }}" class="btn btn-secondary">Back to list</a>
    </form>
</div>
@endsection
