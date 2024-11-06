@extends('layouts.app')

@push('meta')
<meta name="description" content="Two Factor Auth temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT">
  <meta name="author" content="Caesar Krisna">
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:image" content="http://localhost:8000/upload/logo/logo.png" />
  <meta property="og:description" content="Two Factor Auth temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT" />
  <meta property="og:site_name" content="Laravel Blog" />
  <meta name="robots" content="noindex,nofollow" />
@endpush

@section('title')
  Two Factor Auth
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            {{-- <div class="panel-heading">Set up Google Authenticator</div> --}}

            <div class="panel-body" style="text-align: center;">
              <p>Set up your two factor authentication by scanning the barcode below. Alternatively, you can use the code {{$secret}}</p>

              <div>
                {!! $QR_Image !!}
              </div>

              <p>You must set up your Google Authenticator app before continuing. You will be unable to login otherwise</p>
              
              <div>
                <a href="{{route('login')}}" class="btn btn-primary">Complete Registration</a>
              </div>
              
            </div>
        </div>
    </div>
</div>
@endsection