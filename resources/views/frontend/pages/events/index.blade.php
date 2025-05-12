@extends('frontend.master')

@section('content_body')
<div class="container">
    <h1>Available Events</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($events as $event)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $event->name }}</h5>
                    <p class="card-text">
                        <strong>Description:</strong> {{ $event->description }}<br>
                        <strong>Start:</strong> {{ $event->start_time }}<br>
                        <strong>End:</strong> {{ $event->end_time }}
                    </p>
                    <form action="{{ route('player.events.apply', $event->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Apply</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
