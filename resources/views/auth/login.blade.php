@extends('layouts.app')

@section('content')
<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="{{asset('images/img.jpg')}}" alt="" style="height:385px;cover:center">
            </div>
            <div class="signup-form">
                
                    <form method="POST" action="{{ route('login') }}" style="padding: 50px 0">
                        @csrf
                        <h2>Login</h2>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      

                        <div class="form-group row">
                            <div class="col-md-7 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div style="">Don't have account <a href="{{route('register')}}">Register</a></div>
                    </form>
                </div>
            </div>
        </div>
@endsection
