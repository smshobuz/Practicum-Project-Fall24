@extends ('backend.master')
@section ('rent')
<div class="container">
    <h2>Add Sport</h2>

    <form action="{{ route('sports.create') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Sport Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="">Upload Image</label>
             <input name="image" type="file" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection