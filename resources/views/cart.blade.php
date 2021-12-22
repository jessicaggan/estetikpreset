<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>Shopping Cart</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </head>
    <body>
        <header>
        <!-- Navbar -->
        @include('navbar')
        </header>

        
        <main>
        <div id="cart">
                <h1>Cart</h1>
                <img src="{{ asset('image/tutorial.png') }}" alt="Tutorial">
        </div>
        <!-- Body -->
        <div class="container">
            <!-- <p>testttt</p> -->
            @forelse ($userCart as $d)
            <div id= "not-empty">
            <p>testttt</p>
                <table>
                    <tr>
                        <th>Product</th>
                        <!-- <th>Quantity</th> -->
                        <th>Subtotal</th>
                    </tr>
                    @foreach ($userCart as $d)
                    <tr>
                        <td>
                            <img src="{{ asset('image/preset/'.$d->path) }}" class="card-img-top" alt="...">
                            <p>{{ $d->name }}</p>
                            <!-- <p>Rp. {{ $d->price }}.00<p> -->
                            <br>
                                <a href="">Remove</a>
                        </td>
                        <!-- <td><input type="number" value="1"></td> -->
                        <td>Rp. {{ $d->price }}.00</td>
                    </tr>
                    @endforeach 


                <div class="tombol">
                <button type="submit" name="tambah"> Checkout </button>
                </div>
            </div>
            @empty
                <div id = "empty-cart-view">
                <p class="cart-empty">Your cart is currently empty.</p>
                <br><br>
                <a class="button-home" href="/">Return to home		</a>
                </div>
            @endforelse
        </div>
        </main>

        <!-- Footer -->
        @include('footer')
      
    </body>
</html>