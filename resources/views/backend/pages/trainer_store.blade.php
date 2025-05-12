@extends ('backend.master')

@section ('rent')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Trainer List</h3>
            <a href="{{ route('trainer.store') }}" class="btn btn-primary btn-sm float-right">Add New Trainer</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Experience</th>
                        <th>Previous Organization</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alltrainer as $trainer)
                        <tr>
                            <td>{{ $trainer->id }}</td>
                            <td>{{ $trainer->name }}</td>
                            <td>{{ $trainer->address }}</td>
                            <td>{{ $trainer->experience }} years</td>
                            <td>{{ $trainer->previous_organization }}</td>
                            <td>{{ $trainer->mobile }}</td>
                            <td>
                    
                    <a href="{{route('trainer.edit',$trainer->id)}}" class="btn btn-primary" >Edit</a>
                    <a href="{{route('trainer.delete',$trainer->id)}}" class="btn btn-danger" >Delete</a>
                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection