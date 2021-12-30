@extends('layouts.auth')
@section('title','Reset Password- Food Ordering System')
@section('sign','Reset Password')
@section('enter_fields')

@if (session('status'))
<span class="badge rounded-pill bg-light text-primary">{{session('status')}}</span>
@endif

<form action="{{route('password.email')}}" method="POST" class="text-start">
    @csrf

    <div class="input-group input-group-outline my-3">
      <label class="form-label">Email</label>
      <input id="email" type="email" name="email" value="{{old('email')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="email">
    </div>
    @error('email')
    <span class="badge rounded-pill bg-light text-danger">{{$message}}</span>
@enderror
    <div class="text-center">
      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Send Password Link</button>
    </div>
</form>
@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
