@extends('backend.master')
@section('rent')


<div class="container">
    <h1>Edit Team</h1>
    <form action="{{ route('team.update', parameters: $teams->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Team Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $teams->name }}" required>
        </div>
        <div class="form-group">
            <label for="min_age">Minimum Age</label>
            <input type="number" name="min_age" id="min_age" class="form-control" value="{{ $teams->min_age }}">
        </div>
        <div class="form-group">
            <label for="max_age">Maximum Age</label>
            <input type="number" name="max_age" id="max_age" class="form-control" value="{{ $teams->max_age }}">
        </div>
        <div class="form-group">
            <label for="subscription_fee">Subscription Fee</label>
            <input type="number" name="subscription_fee" id="subscription_fee" class="form-control" step="0.01" value="{{ $teams->subscription_fee }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection