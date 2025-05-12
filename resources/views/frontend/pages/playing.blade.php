@extends('frontend.master')
@section('content_body')
<div class="container mt-5">
        <h1 class="text-center mb-4">Match Schedule Information</h1>
        <!-- Sports Card Section -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ( $playing as $data)
            
           
            <!-- Example Sport Card -->
            <div class="col">
                <div class="card h-100">
                    
                    <div class="card-body">

                    
                        
                        <h5 class="card-title">Match Name: <span class="text-primary">{{$data->match_name}}</span></h5>
                        
                        <p class="card-text"><strong>Team One </strong>{{$data->team_one}}</p>
                        <p class="card-text"><strong>Team Two </strong>{{$data->team_two}}</p>
                        <p class="card-text"><strong>Date: </strong>{{$data->date}}</p>
                        <p class="card-text"><strong>Time: </strong>{{$data->time}}</p>
                        <p class="card-text"><strong>Location: </strong>{{$data->location}}</p>
                        
                    </div>
                </div>
            </div>
            @endforeach
          
          
        </div>
    </div>
@endsection