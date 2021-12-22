<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>Estetik</title>

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla&family=Scheherazade+New&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/aboutus.css') }}">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </head>
    
    <body>
            <!-- Navbar -->
            @include('navbar')

        <!-- About Us Header -->
        <div id="aboutus">
            <h1>About Us</h1>
            <h4>"Bringing your wonderful memory aesthetically."</h4>
            <img src="{{ asset('image/aboutus.jpg') }}" alt="AboutUs">
        </div>

            <!-- Additional Service -->
            <div class="aboutus-div" id="aboutus-div1">
                    <div class="lr"></div>
                    <div class="aboutus-div-text">
                        
                        <h3>Additional Service</h3>
                        <div class="ad-box">
                            <div class="ad-row">
                                <div class="ad-col">
                                    <img src="{{ asset('image/aboutus/igstory.png') }}" alt="">
                                    <p id="ad-col-text">Transforming your favorite preset into instagram filter.</p>
                                </div>
                                <div class="ad-col">
                                    <img src="{{ asset('image/aboutus/custom.png') }}" alt="">  
                                    <p id="ad-col-text">Customizing to your liking.</p>
                                </div>
                                <div class="ad-col">
                                    <img src="{{ asset('image/aboutus/consult.png') }}" alt="">    
                                    <p id="ad-col-text">Providing consultation service.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="lr"></div>
            </div>


                <!-- Contact Us -->
                <div class="aboutus-div" id="aboutus-div2">
                    <div class="lr"></div>
                    <div class="aboutus-div-text" id="aboutus-div-text2">

                        <h3>Contact Us</h3>

                        <form class="contact-form">
                            <div class="name">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insert Your Name Here">
                            </div>
                            <div class="email">
                                <label for="Name" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Insert Your email Here">
                            </div>
                            <div class="message">
                                <label for="Message" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <br>
                            <div class="button">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>

                    </div>  
                    <div class="lr"></div>
                </div>


        <!-- Footer -->
        @include('footer')
        
    </body>
</html>