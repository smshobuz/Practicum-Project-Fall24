@extends ('backend.master')

@section('rent')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Role</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $allmembers as $data )
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->role}}</td>
                <td> <img src="{{ url('/backend/uploads/' . $data->image) }}" alt="image"  width="100px"></td>

               
                 <td>
                    <a href="" class="btn btn-primary" >View</a>
                </td>
                 <td>
                    <a href="{{route('members.role.delete',$data->id)}}" class="btn btn-danger" >Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="table-footer">
    <a class="btn btn-primary" href="{{route('clubmembers.store')}}">Add New Member</a>
</div>
</div>


   
@endsection