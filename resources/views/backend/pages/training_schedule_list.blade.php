@extends ('backend.master')
@section('rent')
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                <th scope="col">#</th>
                <th scope="col">Training Name</th>
                <th scope="col">Date</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Location</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ( $alltschedules as $tschedule )
            <tr>
                <td>{{$tschedule->id}}</td>
                <td>{{$tschedule->training_name}}</td>
                <td>{{$tschedule->date}}</td>
                <td>{{$tschedule->start_time}}</td>
                <td>{{$tschedule->end_time}}</td>
                <td>{{$tschedule->location}}</td>
                <td>{{$tschedule->description}}</td>
                <td>
                    
                    <a href="{{route('tschedule_edit',$tschedule->id)}}" class="btn btn-primary" >Edit</a>
                    <a href="{{route('tschedule.delete',$tschedule->id)}}" class="btn btn-danger" >Delete</a>
                </td>
                   
            </tr>
            @endforeach
               
          
        </tbody>
    </table>
    <div class="table-footer">
    <a class="btn btn-primary" href="{{route('training_schedule.list')}}">Add New Training schedule</a>
</div>
</div>
@endsection