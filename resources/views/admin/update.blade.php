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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/update.css') }}">


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
        <div id="Product">
            <h1>Update Product</h1>
        </div>  

        <div class="insert-product">
            <form action="/insert" method="POST" enctype="multipart/form-data" style="padding-top: 15px;">
                @csrf
                <div class="form-group">
                    <label class="form-control-placeholder" for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="product_name" value="{{ $data->name }}">
                </div>
                <div class="form-group">
                    <label class="form-control-placeholder" for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="form-control-placeholder" for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                          <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                        </div>
                      </div>
                </div>
                <div class="error-message">
                    <!-- show error here -->
                    <p>error</p>
                </div>
                <button type="submit" id="updateBtn" class="btn btn-primary btn-block btn-lg mt-1 mb-2">
                    <span>Update<i class="fas fa-long-arrow-alt-right ml-2"></i></span>
                </button>
            </form>
        </div>
        <div class="lr"></div>
    </main>  
    </div>

    
    <!-- Footer -->
    @include('footer')
    
    </body>
</html>