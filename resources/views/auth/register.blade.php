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
    <link rel="stylesheet" href="{{ URL::asset('css/register.css') }}">
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

<body>
    <div class="registerContainer">

        <div class="registerForm">
            <div class="registertext text-center">{{ __('REGISTER') }}</div>


            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-2">
                    <label for="name" class="mb-2 " style="color:#808080">{{ __('Name') }}</label>

                    <div class="">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="email" class="mb-2 " style="color:#808080">{{ __('Email') }}</label>

                    <div class="">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <label for="mobile_number" class="mb-2 " style="color:#808080">{{ __('Mobile Number') }}</label>

                    <div class="">
                        <input id="mobile_number" type="text"
                            class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number"
                            value="{{ old('mobile_number') }}" required autocomplete="mobile_number" autofocus>

                        @error('mobile_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2">
                    <label for="address" class="mb-2 " style="color:#808080">{{ __('Address') }}</label>

                    <div class="">
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                            name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                        @error('address')
                            <span class="invalid-address" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="password" class="mb-2" style="color:#808080">{{ __('Password') }}</label>

                    <div class="">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="mb-3">
                    <label for="password-confirm" class="mb-2"
                        style="color:#808080">{{ __('Confirm Password') }}</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>


                <div class="mx-auto d-block text-center mb-3">
                    <label class="form-check-label" for="signup">
                        <button type="submit" class="registerbtn mt-2 mb-2">
                            {{ __('Register') }}
                        </button>


                </div>




                <div class="mx-auto d-block text-center mb-3">
                    <label class="form-check-label" for="signup" style="color: #fff;margin-right:10px">
                        I already have a account
                    </label><span><a href="{{ route('login') }}" style="text-decoration: none">Sign In</a></span>
                </div>




        </div>



    </div>

</body>

</html>
