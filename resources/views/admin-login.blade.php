<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>
    
    <link rel="stylesheet" href="{{url('css/raj.css')}}">
    <link rel="stylesheet" href="{{url('css/signin.css')}}">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body
      {
          background-image: url(img/sample_bg.jpg)
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <div id="body-bg">
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <h1 style="font-size: 75px;color:white;padding-left:12rem;">||  SAFARNAMA  ||</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<main class="form-signin">
  @if(Session::has('loginmessage'))
  <div class="alert alert-danger" role="alert"> {{Session::get('loginmessage') }}</div>
  @endif
  @php 
      Illuminate\Support\Facades\Session::forget('loginmessage'); 
      @endphp
  <form class="signup-page" method="POST" action="{{ route('admin-profile')}}" enctype="multipart/form-data">
    @csrf
    <h1 style="font-size: 49px;color:white;" class="h2 mb-3 fw-normal">Admin</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; Safarnam Admin</p>
  </form>
</main>


    
  </body>
</html>
