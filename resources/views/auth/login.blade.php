


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

     
          
            <x-jet-validation-errors class="mb-4" />
    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-floating">
                    {{-- <input type="email" name="email" class="" id="floatingInput" placeholder="name@example.com"> --}}
                    <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                    <label for="floatingInput">Email address</label>
                  </div>

                  <div class="form-floating">
                    <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="current-password" />
                    <label for="floatingInput">Password</label>
                </div>
    
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    <x-jet-button class="w-100 btn btn-lg btn-primary">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div>
            </form>
        

</main>


    
  </body>
</html>
