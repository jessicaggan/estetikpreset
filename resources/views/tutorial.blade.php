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

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/tutorial.css') }}">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </head>
    <body>
        
            <!-- Navbar -->
            @include('navbar')
        

        <!-- Body -->
             <!-- Tutorial Image -->
             <div id="tutorial">
                <h1>Tutorial</h1>
                <img src="{{ asset('image/tutorial.png') }}" alt="Tutorial">
            </div>

             <!-- Tutorial Text -->
                <div id="tutor-div">
                    <div id="lr"></div>
                    <div id="tutor-div-text">
                        <h2>How To Install the Preset</h2>
                        <p>&nbsp;</p>
                        <h3>ANDROID</h3>

                        <p>1. Click the download link from the email or open my account -&gt; download (open in safari/chrome, not from instagram browser) and start download the presets file (.DNG) to your phone</p>
                        <p>2. Do not open the preset, but open Lightroom App FIRST</p>
                        <p>3. Click &#8220;Add photos&#8221; and find the presets inside your gallery/download folder</p>
                        <p>4. Open the preset inside lightroom, if you have difficulty finding it, please click &#8220;Recently Added&#8221;</p>
                        <p>5. Make sure you open the preset, find &#8220;&#8230;&#8221; in the upper right corner and click &#8220;CREATE PRESET&#8221;</p>
                        <p>6. Input the Preset Name, click all and done</p>
                        <p>7. Do the same for every other preset</p>
                        <p>8. You can find the preset in the &#8220;preset&#8221;, turn off everything except &#8220;user preset&#8221;</p>
                        <p>&nbsp;</p>

                        <h3>IPHONE</h3>

                        <p>1. Click the download link from the email or open my account -&gt; download (open in safari/chrome, not from instagram browser) and start download the presets file (.DNG) to your phone</p>
                        <p>2. Open the .DNG file in the Lightroom application, or choose copy to Lightroom</p>
                        <p>3. Find the preset image inside the lightroom gallery, if you have difficulty finding it, please click &#8220;Recently Added&#8221;</p>
                        <p>

                        </p>
                        <p>4. Make sure you open the preset, find &#8220;&#8230;&#8221; in the upper right corner and click &#8220;CREATE PRESET&#8221;</p>
                        <p>
                        </p>
                        <p>5. Input the Preset Name, click all and done</p>
                        <p>6. Do the same for every other preset</p>
                        <p>7. You can find the preset in the &#8220;preset&#8221;, click &#8220;user preset&#8221;</p>
                        <p>
                        </p>
                    </div>
                    <div id="lr"></div>
                </div>
       

        <!-- Footer -->
        @include('footer')
        
    </body>
</html>