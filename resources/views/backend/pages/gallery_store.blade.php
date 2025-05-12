@extends ('backend.master')

@section('rent')

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $allgallery as $data )
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td> <img src="{{ url('/backend/uploads/' . $data->image) }}" alt="image"  width="100px"></td>

               
                 <td>
                    <a href="" class="btn btn-primary" >Edit</a>
                    <a href="" class="btn btn-danger" >Delete</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    
    </table>
    <div class="table-footer">
    <a class="btn btn-primary" href="{{route('gallery.store')}}">Add New Image</a>
</div>
    
</div> 


   
@endsection