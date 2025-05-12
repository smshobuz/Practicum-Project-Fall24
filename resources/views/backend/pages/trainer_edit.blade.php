@extends ('backend.master')

@section ('rent')
<div class="container mt-5">
    <h1 class="mb-4">Update Trainer Details</h1>
    <form action="{{ route('trainer.update', $alltrainer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" 
                   value="{{ old('name', $alltrainer->name) }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" required>{{ old('address', $alltrainer->address) }}</textarea>
        </div>

        <div class="form-group">
            <label for="experience">Experience (in years):</label>
            <input type="number" class="form-control" id="experience" name="experience" 
                   value="{{ old('experience', $alltrainer->experience) }}" required>
        </div>

        <div class="form-group">
            <label for="previous_organization">Previous Organization:</label>
            <input type="text" class="form-control" id="previous_organization" name="previous_organization" 
                   value="{{ old('previous_organization', $alltrainer->previous_organization) }}">
        </div>

        <div class="form-group">
            <label for="mobile">Mobile Number:</label>
            <input type="tel" class="form-control" id="mobile" name="mobile" 
                   value="{{ old('mobile', $trainer->mobile) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('trainer') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
