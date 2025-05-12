@extends('backend.master')

@section('rent')
<div class="container">
    <h1>Events List</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($events as $event)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->start_time }}</td>
                    <td>{{ $event->end_time }}</td>
                    <td>
                    <a href="{{route('events.edit',$event->id)}}" class="btn btn-primary" >Edit</a>
                    <a href="{{route('events.delete',$event->id)}}" class="btn btn-danger" >Delete</a>
                </td>
                    
                </tr>
            @empty
                <tr>
                    <td colspan="5">No events found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="table-footer">
    <a class="btn btn-primary" href="{{route('events.create')}}">Add New Event</a>
</div>
</div>
@endsection
