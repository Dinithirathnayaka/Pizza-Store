@extends('layouts.adminfrontend')
@section('content')
    <div class="adminlogin mx-auto d-block tect-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="logintext text-center">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="">
                                <label for="name" class="mb-2 ">{{ __('Name') }}</label>

                                <div class="">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="">
                                <label for="email" class="mb-2 ">{{ __('Email') }}</label>

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


                            <label for="password" class="mb-2">{{ __('Password') }}</label>

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

                            <div class="">
                                <label for="password-confirm" class="mb-2">{{ __('Confirm Password') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="mx-auto d-block text-center mb-3"> <label class="form-check-label" for="signup">
                                    <button type="submit" class="loginbtn mt-2 mb-2">
                                        {{ __('Register') }}
                                    </button>


                            </div>




                            <div class="mx-auto d-block text-center mb-3"> <label class="form-check-label" for="signup">
                                    I already have a account
                                </label><span><a href="{{ route('login') }}">Sign In</a></span></div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
