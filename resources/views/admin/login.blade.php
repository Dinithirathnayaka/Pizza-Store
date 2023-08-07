@extends('layouts.adminfrontend')
@section('content')
    <div class="adminlogin mx-auto d-block tect-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="logintext text-center">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="">
                                <label for="email" class="mb-2 ">{{ __('Email') }}</label>

                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           
                                <label for="password" class="mb-2">{{ __('Password') }}</label>

                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                         

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <div class="mx-auto d-block text-center mb-3"> <label class="form-check-label" for="signup">
                                        <button type="submit" class="loginbtn mt-2 mb-2">
                                            {{ __('Login') }}
                                        </button>
    
                                        @if (Route::has('password.request'))
                                            <a class="forgotlink" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                               
                                    
                                
                                    <div class="mx-auto d-block text-center mb-3"> <label class="form-check-label" for="signup">
                                        Don't have an account?
                                    </label><span><a href="">Sign up</a></span></div>
                                   
                           
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('styles')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection