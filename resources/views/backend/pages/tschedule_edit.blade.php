@extends ('backend.master')

@section ('rent')
<div class="container mt-5">
    <h1 class="mb-4">Update Training Schedule</h1>
    <form action="{{ route('tschedule.update', $alltschedules->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="training_name" class="form-label">Training Name</label>
            <input type="text" class="form-control" id="training_name" name="training_name" 
                   value="{{ old('training_name', $alltschedules->training_name) }}" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" 
                   value="{{ old('date', $alltschedules->date) }}" required>
        </div>

        <div class="mb-3">
            <label for="start_time" class="form-label">Start Time</label>
            <input type="start_time" class="form-control" id="start_time" name="start_time" 
                   value="{{ old('start_time', $alltschedules->start_time) }}" required>
        </div>
        <div class="mb-3">
            <label for="end_time" class="form-label">End Time</label>
            <input type="time" class="form-control" id="end_time" name="end_time" 
                   value="{{ old('timeend_time', $alltschedules->end_time) }}" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" 
                   value="{{ old('location', $alltschedules->location) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $alltschedules->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('training_schedule') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection

