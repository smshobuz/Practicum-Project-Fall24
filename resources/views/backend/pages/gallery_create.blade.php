@extends ('backend.master')
@section('rent')
<div class="container">
    <h2>Add to Gallery</h2>
    
    <form action="{{route('gallery.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="title">Image Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/" required>
         </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
   
@endsection