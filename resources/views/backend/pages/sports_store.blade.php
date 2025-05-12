@extends ('backend.master')

@section('rent')

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sport Name</th>

                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $allsports as $data )
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->description}}</td>
                
                <td> <img src="{{ url('/backend/uploads/' . $data->image) }}" alt="image"  width="100px"></td>
               
                 <td>
                    <a href="" class="btn btn-primary" >view</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    
    </table>
    <div class="table-footer">
 
    <a class="btn btn-primary" href="{{route('sports.store')}}">Add New sports</a>
</div>
    
</div> 


   
@endsection