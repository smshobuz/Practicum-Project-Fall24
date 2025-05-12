@extends ('backend.master')

@section('rent')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Match ID</th>
                <th scope="col">Match Name</th>
                <th scope="col">Team One</th>
                <th scope="col">Team Two</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Location</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ( $schedules as $schedule )
            <tr>
                <td>{{$schedule->id}}</td>
                <td>{{$schedule->match_name}}</td>
                <td>{{$schedule->team_one}}</td>
                <td>{{$schedule->team_two}}</td>
                <td>{{$schedule->date}}</td>
                <td>{{$schedule->time}}</td>
                <td>{{$schedule->location}}</td>
                <td>
                    
                    <a href="{{route('schedule.edit',$schedule->id)}}" class="btn btn-primary" >Edit</a>
                    <a href="{{route('schedule.delete',$schedule->id)}}" class="btn btn-danger" >Delete</a>
                </td>
                   
            </tr>
            @endforeach
               
          
        </tbody>
    </table>
<div class="table-footer">
    <a class="btn btn-primary" href="{{route('schedule.create')}}">Add New Playing schedule</a>
</div>
@endsection