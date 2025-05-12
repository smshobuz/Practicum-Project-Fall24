@extends('backend.master')

@section('rent')
<div class="container mt-5">
    <h1 class="text-center">Record Attendance</h1>
    <form action="{{ route('attendance.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="player_id" class="form-label">Player</label>
            <select name="player_id" id="player_id" class="form-control">
                @foreach ($players as $player)
                <option value="{{ $player->id }}">{{ $player->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="training_id" class="form-label">Training</label>
            <select name="training_id" id="training_id" class="form-control">
                @foreach ($trainings as $training)
                <option value="{{ $training->id }}">{{ $training->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="1">Present</option>
                <option value="0">Absent</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Record Attendance</button>
    </form>
</div>
@endsection
