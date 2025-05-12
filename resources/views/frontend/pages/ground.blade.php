@extends('frontend.master')
@section('content_body')
<div class="container mt-5">
        <h1 class="text-center mb-4"> Ground Details</h1>
        <!-- Sports Card Section -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ( $ground as $data)
            
           
            <!-- Example Sport Card -->
            <div class="col">
                <div class="card h-100">
                    
                    <div class="card-body">

                   	

                    <p class="card-text"><strong>Ground No: </strong>{{$data->id}}</p>
                        <h5 class="card-title">Ground Name: <span class="text-primary">{{$data->groundname}}</span></h5>
                        
                        <p class="card-text"><strong>Timeslot:  </strong>{{$data->timeslot}}</p>
                        <p class="card-text"><strong>Ground Location:  </strong>{{$data->location}}</p>
                        <p class="card-text"><strong>Date: </strong>{{$data->teamname}}</p>
                       
                        
                    </div>
                </div>
            </div>
            @endforeach
          
          
        </div>
    </div>
@endsection