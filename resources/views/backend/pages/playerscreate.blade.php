
<!-- Update players Information  -->
@extends ('backend.master')
@section ('rent')
<h2>Player Information</h2>
<form action="{{route('players.create')}}" method="post" enctype="multipart/form-data">
  @csrf  
  <div class="container mt-5">
        
    
            <div class="mb-3">
                <label for="name" class="form-label">Player Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <select class="form-select" id="position" name="position" required>
                    <option selected disabled>Choose...</option>
                    <option value="Forward">Forward</option>
                    <option value="Midfielder">Midfielder</option>
                    <option value="Defender">Defender</option>
                    <option value="Goalkeeper">Goalkeeper</option>
                </select>
            </div>
            <div class="form-group">
    <label for="">Upload Image</label>
    <input name="image" type="file" class="form-control" >
  </div>
            <div class="mb-3">
                <label for="team" class="form-label">Team</label>
                <input type="text" class="form-control" id="team" name="team" required>
            </div>
            

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('playersb') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>

@endsection