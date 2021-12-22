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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/manage.css') }}">


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </head>
    <body>
    <header>
        <!-- Navbar -->
        @include('navbar')
    </header>
    <div class="container">
    <main>
        <div class="lr"></div>
        <div id="title">
            <h1>Manage Product</h1>
        </div>  

        <div class="product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                <tr>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">PRODUCT PRICE</th>
                    <th scope="col">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                    <!-- show product -->
                @foreach ($data as $d)
                <tr>
                    <td class="tm-product-name">{{ $d->name }}</td>
                    <td>{{ $d->price }}</td>
                    <td>
                        <a href="update" class="update">
                        <i class="bi bi-pencil-square"></i> Update
                        </a>
                    </td>
                    <td>
                        @method('DELETE')
                        <a href="/delete/{{ $d->id }}" class="delete">
                        <i class="bi bi-trash"></i> Delete
                        </a>
                    </td>
                </tr>    
                @endforeach
                </tbody>
            </table>
            <a href="/insert" name="insertBtn" id="insertBtn" class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
        </div>
        
        <div class="lr"></div>
    </main>  
    </div>
<Footer>
    
    <!-- Footer -->
    @include('footer')

    </body>
</html>