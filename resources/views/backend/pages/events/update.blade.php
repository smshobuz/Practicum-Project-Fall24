@extends('backend.master')

@section('rent')
<div class="container">
    <h1>Update Event</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('events.update', $events->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Event Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $events->name) }}" required>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Event Description:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $events->description) }}" required>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="start_time">Start Time:</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="{{ old('start_time', date('Y-m-d\TH:i', strtotime($events->start_time))) }}" required>
            @error('start_time')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="end_time">End Time:</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ old('end_time', date('Y-m-d\TH:i', strtotime($events->end_time))) }}" required>
            @error('end_time')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
