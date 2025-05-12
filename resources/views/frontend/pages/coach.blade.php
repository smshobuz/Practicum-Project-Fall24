@extends('frontend.master')
@section('content_body')
<div class="container mt-5">
        <h1 class="text-center mb-4">Coach Information</h1>
        <!-- Sports Card Section -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ( $coach as $data)
            
           
            <!-- Example Sport Card -->
            <div class="col">
                <div class="card h-100">
                    
                    <div class="card-body">

                    <p class="card-text"><strong>Coach ID : </strong>{{$data->id}}</p>
                        <h5 class="card-title">Coach Name : <span class="text-primary">{{$data->player_name}}</span></h5>
                        
                        <p class="card-text"><strong>First Name : </strong>{{$data->first_name}}</p>
                        <p class="card-text"><strong>Last Name : </strong>{{$data->last_name}}</p>
                        <p class="card-text"><strong>Email : </strong>{{$data->email}}</p>
                        <p class="card-text"><strong>DOB : </strong>{{$data->dob}}</p>
                        <p class="card-text"><strong>Position : </strong>{{$data->position}}</p>
                        <p class="card-text"><strong>Team : </strong>{{$data->team}}</p>
                        
                    </div>
                </div>
            </div>
            @endforeach
          
          
        </div>
    </div>
@endsection 