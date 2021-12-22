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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/chat.css') }}">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </head>
    <body>
       
        <!-- Navbar -->
        @include('navbar')
        

        <!-- Body -->
        <div class="chat-container">
            <!-- if admin -->
            @if(session('LoggedUser')['role']===2)
                <div class="card">
                    <div class="row g-0">
                        <div class="col-12 col-lg-5 col-xl-3 border-right">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1 ml-3">
                                <h1 class="h3 mb-3">Messages</h1>
                                </div>
                            </div>

                            <!-- list orang -->
                            @foreach ($names as $c)
                            <a href="#" class="list-group-item list-group-item-action border-0">
                                <div class="d-flex align-items-start">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="William Harris" width="40" height="40">
                                    <div class="flex-grow-1 ml-3">
                                        {{$c}}
                                        <div class="small"><span class="fas fa-circle chat-online"></span> Offline</div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            <hr class="d-block d-lg-none mt-1 mb-0">
                        </div>

                        <!-- Chat Box Header -->
                        <div class="col-12 col-lg-7 col-xl-9">
                            <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                <div class="d-flex align-items-center py-1">
                                    <div class="position-relative">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    </div>
                                    <div class="flex-grow-1 pl-3">
                                        <strong>{{ $names[0] }}</strong>
                                        <div class="text-muted small"></div>
                                    </div>
                                </div>
                            </div>


                            <!-- Chats -->
                            <div class="position-relative">
                                <div class="chat-messages p-4">
                                    @foreach($chats as $c )
                                        @if(session('LoggedUser')['username']==$c->sender_username)
                                            <div class="chat-message-right pb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                                    <div class="text-muted small text-nowrap mt-2">{{ explode(" ",$c->timestamp)[1] }}</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3 ml-5">
                                                    <div class="font-weight-bold mb-1">You</div>
                                                    {{ $c->message }}
                                                </div>
                                            </div>
                                        @else
                                            <div class="chat-message-left pb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Admin" width="40" height="40">
                                                    <div class="text-muted small text-nowrap mt-2">{{ explode(" ",$c->timestamp)[1] }}</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3 mr-5">
                                                    <div class="font-weight-bold mb-1">{{ $c->sender_username }}</div>
                                                    {{ $c->message }}
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                            
                            <!-- Send Msg -->
                            <div class="flex-grow-0 py-3 px-4 border-top">
                                <div class="input-group">
                                    <form action="/sendMsg/{{$chat_id}}" method="POST" id="chat-send-msg-box">
                                        @csrf
                                        <input name="message" type="text" class="form-control" placeholder="Type your message">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            @else
            <div class="card">
                    <div class="row g-0">

                        <!-- Left Admin Box -->
                        <div class="col-12 col-lg-5 col-xl-3 border-right">
                            <div class="client-list">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1 ml-3">
                                        <h1 class="h3 mb-3" style="padding-top:2vh; padding-left:2vw;">Messages</h1>
                                    </div>
                                </div>
                                <a href="#" class="list-group-item list-group-item-action border-0">
                                <div class="d-flex align-items-start">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                                    <div class="flex-grow-1 ml-3">
                                        Admin
                                        <div class="small"><span class="fas fa-circle chat-online"></span> Offline</div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>

                        <!-- Chat Box -->
                        <div class="col-12 col-lg-7 col-xl-9">
                            <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                <div class="d-flex align-items-center py-1">
                                    <div class="position-relative">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Admin" width="40" height="40">
                                    </div>
                                    <div class="flex-grow-1 pl-3">
                                        <strong>Admin</strong>
                                        <div class="text-muted small"></div>
                                    </div>
                                <!-- 	<div>
                                        <button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>
                                        <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
                                        <button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
                                    </div> -->
                                </div>
                            </div>

                            <div class="position-relative">
                                <div class="chat-messages p-4">
                                    @foreach($chats as $c )
                                        @if(session('LoggedUser')['username']==$c->sender_username)
                                            <div class="chat-message-right pb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                                    <div class="text-muted small text-nowrap mt-2">{{ explode(" ",$c->timestamp)[1] }}</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3 ml-5">
                                                    <div class="font-weight-bold mb-1">You</div>
                                                    {{ $c->message }}
                                                </div>
                                            </div>
                                        @else
                                            <div class="chat-message-left pb-4">
                                                <div>
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="rounded-circle mr-1" alt="Admin" width="40" height="40">
                                                    <div class="text-muted small text-nowrap mt-2">{{ explode(" ",$c->timestamp)[1] }}</div>
                                                </div>
                                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3 mr-5">
                                                    <div class="font-weight-bold mb-1">Admin</div>
                                                    {{ $c->message }}
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>

                            <div class="flex-grow-0 py-3 px-4 border-top">
                                <div class="input-group">
                                    <form action="/sendMsg/{{$chat_id}}" method="POST" id="chat-send-msg-box">
                                        @csrf
                                        <input name="message" type="text" class="form-control" placeholder="Type your message">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
                
            </div>
            @endif
            
        <!-- Footer -->
        @include('footer')
      
    </body>
</html>