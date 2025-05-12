<!-- Update Player Information -->
@extends ('backend.master')

@section ('rent')
<div class="container mt-5">
    <h2 class="mb-4">Update Player Information</h2>
    <form action="{{ route('player.update', $allplayers->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" 
                   value="{{ old('first_name', $allplayers->first_name) }}" required>
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" 
                   value="{{ old('last_name', $allplayers->last_name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" 
                   value="{{ old('email', $allplayers->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" 
                   value="{{ old('dob', $allplayers->dob) }}" required>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <select class="form-select" id="position" name="position" required>
                <option selected disabled>Choose...</option>
                <option value="Forward" {{ old('position', $allplayers->position) == 'Forward' ? 'selected' : '' }}>Forward</option>
                <option value="Midfielder" {{ old('position', $allplayers->position) == 'Midfielder' ? 'selected' : '' }}>Midfielder</option>
                <option value="Defender" {{ old('position', $allplayers->position) == 'Defender' ? 'selected' : '' }}>Defender</option>
                <option value="Goalkeeper" {{ old('position', $allplayers->position) == 'Goalkeeper' ? 'selected' : '' }}>Goalkeeper</option>
            </select>
        </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input name="image" type="file" class="form-control">
            @if($allplayers->image)
                <img src="{{ asset('uploads/players/' . $allplayers->image) }}" alt="Player Image" width="100" class="mt-2">
            @endif
        </div>

        <div class="mb-3">
            <label for="team" class="form-label">Team</label>
            <input type="text" class="form-control" id="team" name="team" 
                   value="{{ old('team', $allplayers->team) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('players.list') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
