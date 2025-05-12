@extends ('backend.master')
@section('rent')
 
 <form action="{{route('ground.form')}}"  method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Ground Name</label>
    <input name="groundname" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter a Ground Name">
    <small id="emailHelp" class="form-text text-muted">Enter A Ground Name Here</small>
  </div>
  <!-- <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div> -->
  <div>
    <label for="exampleInputPassword1">Ground Location</label>
    <input name="location" type="text" class="form-control" id="location" placeholder="location">
  </div>
  <!-- <div>
    <label for="exampleInputPassword1">Team Name</label>
    <input name="teamname" type="text" class="form-control" id="teamname" placeholder="Team Name">
  </div> -->
  <button  type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ route('ground') }}" class="btn btn-secondary">Back to List</a>
</form>

@endsection
