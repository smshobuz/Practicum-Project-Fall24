@extends ('backend.master')

@section('rent')
<div class="container mt-5">
    <h1 class="mb-4">Update Ground Details</h1>
    <form action="{{ route('ground.update',$allgrounds->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="groundname">Ground Name</label>
            <input name="groundname" type="text" class="form-control" id="groundname" 
                   value="{{ old('groundname', $allgrounds->groundname) }}" placeholder="Enter a Ground Name" required>
            <small id="groundHelp" class="form-text text-muted">Update the ground name here.</small>
        </div>

        <!-- <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="time" class="form-control" id="time" name="time" 
                   value="{{ old('time', $allgrounds->time) }}" required>
        </div> -->

        <div class="form-group">
            <label for="location">Ground Location</label>
            <input name="location" type="text" class="form-control" id="location" 
                   value="{{ old('location', $allgrounds->location) }}" placeholder="Enter location" required>
        </div>

        <!-- <div class="form-group">
            <label for="teamname">Team Name</label>
            <input name="teamname" type="text" class="form-control" id="teamname" 
                   value="{{ old('teamname', $allgrounds->teamname) }}" placeholder="Enter team name" required>
        </div> -->

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('ground.list') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
