@extends ('backend.master')

@section('rent')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Ground Name</th>
                <th scope="col">Location</th>
                <!-- <th scope="col">Time</th> -->
                <!-- <th scope="col">Teamname</th> -->
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $allground as $data )
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->groundname}}</td>
                <!-- <td>{{$data->timeslot}}</td> -->
                <td>{{$data->location}}</td>
                <!-- <td>{{$data->teamname}}</td> -->
                <td>
                    <a href="{{route('ground.edit',$data->id)}}" class="btn btn-primary" >Edit</a>
                    <a href="{{route('ground.delete',$data->id)}}" class="btn btn-danger" >Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="table-footer">
    <a class="btn btn-primary" href="{{route('ground.list')}}">Add New Ground</a>
</div>
</div>


@endsection