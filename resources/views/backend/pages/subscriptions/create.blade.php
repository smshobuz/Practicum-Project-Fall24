@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create New Subscription</h1>
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

    <form action="{{ route('admin.subscriptions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="player_id">Select Player</label>
            <select name="player_id" id="player_id" class="form-control" required>
                <option value="">-- Select a Player --</option>
                @foreach ($players as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-3">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create Subscription</button>
    </form>
</div>
@endsection
