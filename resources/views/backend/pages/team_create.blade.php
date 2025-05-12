@extends('backend.master')

@section('rent')
<div class="container">
    <h1>Create Team</h1>
    <form action="{{ route('team.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Team Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="min_age">Minimum Age</label>
            <input type="number" name="min_age" id="min_age" class="form-control">
        </div>
        <div class="form-group">
            <label for="max_age">Maximum Age</label>
            <input type="number" name="max_age" id="max_age" class="form-control">
        </div>
        <div class="form-group">
            <label for="subscription_fee">Subscription Fee</label>
            <input type="number" name="subscription_fee" id="subscription_fee" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create</button>
    </form>
</div>
@endsection
