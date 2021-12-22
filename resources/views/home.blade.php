<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>Estetik</title>
        
        @if(Session::has('accessFail'))
			<script> alert('{{ Session::get('accessFail') }}') </script>
		@endif

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </head>
    <body>
       
            <!-- Navbar -->
            @include('navbar')
        

            <!-- Body -->
                    <!-- Image Slider -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" data-interval="10000">
                            <div class="carousel-item active">
                            <img src="{{ asset('image/slider_image/1.jpg') }}" class="d-block w-100" alt="First Slide">
                            </div>
                            <div class="carousel-item" data-interval="2000">
                            <img src="{{ asset('image/slider_image/2.jpg') }}" class="d-block w-100" alt="Second Slide">
                            </div>
                            <div class="carousel-item">
                            <img src="{{ asset('image/slider_image/3.jpg') }}" class="d-block w-100" alt="Third Slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            
            <div class="container">
                    <!-- Card -->
                        <div class="card-deck">
                            @for ($i = 0; $i < 3; $i++)
                                <div class="card">
                                    <a href="view/{{ $data[$i]->id }}"><img src="{{ asset('image/preset/'.$data[$i]->path) }}" class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="view/{{ $data[$i]->id }}">{{ $data[$i]->name }}</a></h5>
                                        <p style="text-align:center">Rp. {{ $data[$i]->price }}</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
            </div>

       <!-- Footer -->
       @include('footer')
      
    </body>
</html>