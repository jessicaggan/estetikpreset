<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>Estetik</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/preset.css') }}">
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </head>
    <body>
       
            <!-- Navbar -->
            @include('navbar')
        

            <div id="tutorial">
                <h1>Preset</h1>
                <img src="{{ asset('image/tutorial.png') }}" alt="Tutorial">
            </div>
                

            <!-- Body -->
            <div class="container">
                    <!-- Card -->

                    <div class="d-flex justify-content-center flex-wrap">
                        @foreach ($data as $d)
                            <div class="card">
                            <a href="view/{{ $d->id }}"><img src="{{ asset('image/preset/'.$d->path) }}" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="view/{{ $d->id }}">{{ $d->name }}</a></h5>
                                    <h5 class="card-title">Rp. {{ $d->price }}.00<h5>
                                </div>
                            </div>
                        @endforeach  
                    </div>
                    <div class="nav-page">
                        {{$data->withQueryString()->links()}}
                    </div>
            </div>

        <!-- Footer -->
        @include('footer')
      
    </body>
</html>