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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/view.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
      

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </head>
    <body>
       
        <!-- Navbar -->
        @include('navbar')
        

        <!-- Body -->
        <div class="flex-container">
            <div id="img-row">
                <!-- Start Figure -->
                <div id="img-col">
                    <img src="{{ asset('image/preset/'.$product->path) }}" alt="">
                </div>
                    
                <!-- End Figure  -->
            </div>
            <!-- productnya bebas mau diapain, ini cuma contoh buat nampilin info produknya -->
            <div id="prod-desc">
                Name: {{ $product->name }}
                <br><br>
                Price: {{ $product->price }}
                <br><br>
                Description: {{ $product->description }}
                <br><br>
                <form action="/addtocart/{{ $product->id }}" method="GET">
                    <button type="submit" class="btn">Add To Cart</button>    
                </form>
                
            </div>
        </div> 

       <!-- Footer -->
       @include('footer')
      
    </body>
    <script>
        var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";
        }
        else
        {
            MenuItems.style.maxHeight = "0px"
        }
    }
    </script>
</html>