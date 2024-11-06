@extends('layouts.app')

@push('meta')
<meta name="description" content="Verification temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT">
  <meta name="author" content="Caesar Krisna">
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:image" content="http://localhost:8000/upload/logo/logo.png" />
  <meta property="og:description" content="Verification temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT" />
  <meta property="og:site_name" content="Laravel Blog" />
  <meta name="robots" content="noindex,nofollow" />
@endpush

@section('title')
  Verification
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default" style="text-align: center;">


              <div class="panel-heading">Register</div>
              
              <div class="panel-body">
                <form action="{{route('2fa')}}" method="POST" class="form-horizontal">
                  @csrf

                  <div class="form-group">
                    <p>Please enter the <strong>OTP</strong> generated on your Authenticator App. <br/> Ensure you submit </p>
                    <label for="one_time_password" class="col-md-4 control-label">One Time Password</label>

                    <div>
                      <input type="number" id="one_time_password" class="form-control" name="one_time_password" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div>
                      <button type="submit" class="btn btn-primary">
                        Login
                      </button>
                    </div>
                  </div>
                  
                </form>
              </div>
              
            </div>
        </div>
    </div>
</div>
@endsection