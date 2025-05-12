@extends('backend.master')

@section('rent')
<div class="container mt-5">
    <h1 class="mb-4">Create Playing Schedule</h1>
    <form action="{{ route('schedule.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="match_name" class="form-label">Match Name</label>
            <input type="text" class="form-control" id="match_name" name="match_name" placeholder="Enter match name" required>
        </div>

        <div class="mb-3">
            <label for="team_one" class="form-label">Team One</label>
            <input type="text" class="form-control" id="team_one" name="team_one" placeholder="Enter name of team one" required>
        </div>

        <div class="mb-3">
            <label for="team_two" class="form-label">Team Two</label>
            <input type="text" class="form-control" id="team_two" name="team_two" placeholder="Enter name of team two" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter match location" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('schedule')}}"class="btn btn-primary">Back to list</a>
    </form>
</div>
@endsection