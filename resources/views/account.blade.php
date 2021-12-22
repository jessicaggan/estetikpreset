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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/account.css') }}">
    </head>
    <body>
       
            <!-- Navbar -->
            @include('navbar')
        
            <!-- Body -->
            <div class="account-div">
                    <div class="lr"></div>
                    <!-- LOGIN DIV -->
                    
                    <div class="account-div-child" id="account-div-login">
                        <h2>Login</h2>
                        <form action="/login" method="POST">
                            @if (Session::get('loginFail'))
                                <div class="mb-3 required">
                                    {{ Session::get('loginFail')}}
                                </div>
                            @endif

                            @csrf
                            
                            <div class="mb-3">
                                <label for="InputEmail1" class="form-label">Email address</label><span class="required">*</span></label>
                                <input type="email" class="form-control @if (Session::get('last_auth_attempt') === 'login') @error('email') is-invalid @enderror @endif" id="InputEmail1" name="email" aria-describedby="emailHelp"  value="{{ old('email') }}">
                                @if (Session::get('last_auth_attempt') === 'login')
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword1" class="form-label">Password</label><span class="required">*</span></label>
                                <input type="password" class="form-control @if (Session::get('last_auth_attempt') === 'login') @error('password') is-invalid @enderror @endif" id="InputPassword1" name="password" value="{{ old('password') }}">
                                @if (Session::get('last_auth_attempt') === 'login')
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">LOG IN</button>
                            <a href="">Reset your password?</a>
                        </form>
                    </div>


                    <!-- REGISTER DIV -->
                    <div class="account-div-child" id="account-div-register">
                        <h2>Register</h2>
                        <form action="/register" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="InputUsername" class="form-label">Username</label><span class="required">*</span></label>
                                <input type="text" class="form-control @if (Session::get('last_auth_attempt') === 'register') @error('username') is-invalid @enderror @endif" id="InputUsername" name="username"  value="{{ old('username') }}">   
                                @if (Session::get('last_auth_attempt') === 'register')
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="InputEmail1" class="form-label" >Email address</label><span class="required">*</span></label>
                                <input type="email" class="form-control @if (Session::get('last_auth_attempt') === 'register') @error('email') is-invalid @enderror @endif" id="InputEmail1" name="email" value="{{ old('email') }}" aria-describedby="emailHelp">
                                @if (Session::get('last_auth_attempt') === 'register')
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword1" class="form-label" >Password</label><span class="required">*</span></label>
                                <input type="password" class="form-control @if (Session::get('last_auth_attempt') === 'register') @error('password') is-invalid @enderror @endif" name="password" id="InputPassword1" >
                                @if (Session::get('last_auth_attempt') === 'register')
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="InputPassword1" class="form-label" >Retype Password</label><span class="required">*</span></label>
                                <input type="password" class="form-control @if (Session::get('last_auth_attempt') === 'register') @error('retype_password') is-invalid @enderror @endif" id="InputPassword1" name="retype_password" >
                                @if (Session::get('last_auth_attempt') === 'register')
                                    @error('retype_password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">REGISTER</button>
                        </form> 
                    </div>
                    <div class="lr"></div>
                </div>
            
        <!-- Footer -->
        @include('footer')
           
    </body>
</html>