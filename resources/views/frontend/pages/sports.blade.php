
@extends ('frontend.master')
@section('content_body')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Sports Information</h1>
        <!-- Sports Card Section -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ( $sports as $data)
            
           
            <!-- Example Sport Card -->
            <div class="col">
                <div class="card h-100">
                    <img src="{{url('/backend/uploads/',$data->image)}}" alt="">
                    <div class="card-body">
                        
                        <h5 class="card-title">Sport Name: <span class="text-primary">{{$data->name}}</span></h5>
                        
                        <p class="card-text"><strong>Description:</strong>{{$data->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
          
          
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection