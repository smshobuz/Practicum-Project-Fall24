@extends('frontend.master')

@section('content_body')
<div class="container">
    <h1>Registration Successful</h1>
    <p>Thank you for registering! You have been successfully assigned to your team.</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
</div>
@endsection
