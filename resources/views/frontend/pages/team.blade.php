@extends('frontend.master')
@section('content_body')
<div class="container mt-5">
        <h1 class="text-center mb-4">Teams Information</h1>
        <!-- Sports Card Section -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ( $teams as $data)
            
            <!-- Example Sport Card -->
            <div class="col">
            <div class="card h-100">
                    
                    <div class="card-body">

                    
                        
                        <h5 class="card-title">ID: <span class="text-primary">{{$data->id}}</span></h5>
                        
                        <p class="card-text"><strong>Name </strong>{{$data->name}}</p>
                        <p class="card-text"><strong>Minimum Age </strong>{{$data->min_age}}</p>
                        <p class="card-text"><strong>Maximum age: </strong>{{$data->max_age}}</p>
                        <p class="card-text"><strong>Subscription fee: </strong>{{$data->subscription_fee}}</p>
                      
                        
                    </div>
                </div>
            </div>
            @endforeach
          
          
        </div>
    </div>
@endsection
