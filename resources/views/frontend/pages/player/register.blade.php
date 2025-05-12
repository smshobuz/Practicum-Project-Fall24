@extends('frontend.master')

@section('content_body')
<div class="container">
    <h1>Player Registration</h1>
    <form action="{{ route('player.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" value="{{ old('date_of_birth') }}" required>
        </div>
        <div class="mb-3">
            <label for="subscription_fee_paid" class="form-label">Subscription Fee Paid</label>
            <select name="subscription_fee_paid" id="subscription_fee_paid" class="form-control" required>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
