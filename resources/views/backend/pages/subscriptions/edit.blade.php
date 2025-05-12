@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Subscription</h1>
    <a href="{{ route('admin.subscriptions.index') }}" class="btn btn-secondary mb-3">Back to Subscriptions</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.subscriptions.update', $subscription->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="player_id">Player</label>
            <input type="text" class="form-control" id="player_id" value="{{ $subscription->player->name }}" disabled>
        </div>

        <div class="form-group mt-3">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $subscription->start_date }}" required>
        </div>

        <div class="form-group mt-3">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" value="{{ $subscription->end_date }}" disabled>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Subscription</button>
    </form>
</div>
@endsection
