@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('two-factor-verify') }}">
                        @csrf
                        <label for="code">Two-Factor Code</label>
                        <input type="text" name="code" id="code" required>
                        <button type="submit">Verify</button>
                    </form>

                    @if ($errors->any())

                    <div>
                      @foreach ($errors->all() as $error)
                          <p>{{$error}}</p>
                      @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection