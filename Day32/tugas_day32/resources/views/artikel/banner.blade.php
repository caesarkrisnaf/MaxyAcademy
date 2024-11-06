@extends('artikel/template/app')

@push('meta')
<meta name="description" content="Banner temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT">
  <meta name="author" content="Caesar Krisna">
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:title" content="Banner Laravel Blog" />
  <meta property="og:image" content="http://localhost:8000/upload/logo/logo.png" />
  <meta property="og:description" content="Banner temukan artikel terbaru dan terlengkap tentang teknologi IT. Laravel Blog adalah sumber informasi terpercaya untuk para antusias IT" />
  <meta name="robots" content="index,follow" />
@endpush

@section('title', 'Banner')

@section('content')
   <div class="card mt-4 shadow-sm">
        <img src="/upload/banner/{{$banner->sampul}}" height="400px" class="card-img-top" alt="...">
        <div class="card-body">
            <h3 class="card-title">{{$banner->judul}}</h3>
            <small class="card-text">
                <span class="text-muted">{{$banner->created_at->diffForHumans()}}</span>
            </small>
            <hr>

            <p class="card-text">{!!$banner->konten!!}</p>
        </div>
    </div>
@endsection