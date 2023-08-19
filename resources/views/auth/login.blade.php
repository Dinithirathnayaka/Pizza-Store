
    <!DOCTYPE html>
<html lang="en">

<head>


    <title>Pizza Store</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/menucarosul.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>


    <script src="https://kit.fontawesome.com/eb896d6758.js" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Fonts -->


</head>

<body class="">
    <div class="loginContainer">

<div class="loginForm">
    <div class="logintext text-center">{{ __('LOGIN') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="mb-2 " style="color:#808080">{{ __('Email') }}</label>

                                <div class="">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <label for="password" class="mb-2" style="color:#808080">{{ __('Password') }}</label>

                            <div class="mb-3">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-check mb-5">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label primary" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <div class="mx-auto d-block text-center mb-3">
                                <label class="form-check-label" for="signup">
                                    <button type="submit" class="loginbtn mt-2 mb-2">
                                        {{ __('Login') }}
                                    </button>


                            </div>
                            @if (Route::has('password.request'))
                                <a class="forgotlink text-center mb-3" href="{{ route('password.request') }}" >
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif



                            <div class="mx-auto d-block text-center mb-3">
                                <label class="form-check-labelsign " for="signup" style="margin-right: 10px">
                                    Don't have an account?
                                </label><span><a href="{{ route('register') }}" class="signup">Sign up</a></span></div>



                    </div>
</div>



    </div>

</body>

</html>





