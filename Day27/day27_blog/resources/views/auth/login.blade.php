@extends('layouts.app')

@push('meta')
<meta name="description" content="Login temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT">
  <meta name="author" content="Caesar Krisna">
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:image" content="http://localhost:8000/upload/logo/logo.png" />
  <meta property="og:description" content="Login temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT" />
  <meta property="og:site_name" content="Laravel Blog" />
  <meta name="robots" content="noindex,nofollow" />
@endpush

@section('title')
  Login
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
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
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="text-center">
                            <h4>Or</h4>
                            <a href="{{ route('google-auth') }}" class='btn btn-dark'>
                                <i class="fa-brands fa-google"></i>&nbsp;&nbsp;&nbsp;Continue with Google
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
