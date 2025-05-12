@extends ('backend.master')
@section ('rent')
<div class="container">
    <h2>Add Club Member</h2>
    
    <form action="{{ route('clubmembers.create') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" id="role" name="role" required>
                <option value="Player">Player</option>
                <option value="Coach">Coach</option>
                <option value="Manager">Manager</option>
            </select>
        </div>
        <div class="form-group">
    <label for="">Upload Image</label>
    <input name="image" type="file" class="form-control" >
  </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection