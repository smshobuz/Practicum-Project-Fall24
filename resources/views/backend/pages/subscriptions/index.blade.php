@extends('layouts.admin')

@section('content')
<h1>Subscriptions</h1>
<a href="{{ route('admin.subscriptions.create') }}" class="btn btn-primary">Add Subscription</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Player</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subscriptions as $subscription)
            <tr>
                <td>{{ $subscription->id }}</td>
                <td>{{ $subscription->player->name }}</td>
                <td>{{ $subscription->start_date }}</td>
                <td>{{ $subscription->end_date }}</td>
                <td>{{ $subscription->status }}</td>
                <td>
                    <a href="{{ route('admin.subscriptions.edit', $subscription->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.subscriptions.destroy', $subscription->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $subscriptions->links() }}
@endsection
