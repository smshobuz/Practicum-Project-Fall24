@extends ('backend.master')
@section ('rent')

<form action="{{ route('trainer.create') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="address">Address:</label>
        <textarea class="form-control" id="address" name="address" required></textarea>
    </div>

    <div class="form-group">
        <label for="experience">Experience (in years):</label>
        <input type="number" class="form-control" id="experience" name="experience" required>
    </div>

    <div class="form-group">
        <label for="previous_organization">Previous Organization:</label>
        <input type="text" class="form-control" id="previous_organization" name="previous_organization">
    </div>

    <div class="form-group">
        <label for="mobile">Mobile Number:</label>
        <input type="tel" class="form-control" id="mobile" name="mobile" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('trainer') }}" class="btn btn-secondary">Back to List</a>

</form>
@endsection