@extends ('backend.master')
@section ('rent')
<div class="container">
    <h1>Team</h1>
   
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Min Age</th>
                <th>Max Age</th>
                <th>Subscription Fee</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->min_age ?? 'N/A' }}</td>
                    <td>{{ $team->max_age ?? 'N/A' }}</td>
                    <td>{{ $team->subscription_fee }}</td>
                    <td>
                        <a href="{{ route('team.edit', $team->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('team.delete', $team->id) }}" class="btn btn-danger btn-sm">Delete</a>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('team.create') }}" class="btn btn-primary">Create Team</a>
</div>
@endsection
