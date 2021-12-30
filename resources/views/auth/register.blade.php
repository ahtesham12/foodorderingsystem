
@extends('layouts.auth')
@section('title','HOB-Sign Up')
@section('sign','Sign Up')
@section('facebook','Sign Up With Facebook')
@section('google','Sign Up With Google')
@section('auth_url')
{{route('login')}}
@endsection
@section('auth_text','Sign In')

@section('enter_fields')
@if (session('message'))
<div class="alert alert-primary alert-dismissible text-white" role="alert">
    <span class="text-sm text-white">{{session('message')}}</span>
    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
@endif
<form role="form" class="text-start" action="{{route('register')}}" method="POST">
    @csrf
    <div class="input-group input-group-outline my-3">
        <label class="form-label">Name</label>
        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" onfocus="focused(this)" onfocusout="defocused(this)">
      </div>
      @error('name')
      <span class="badge rounded-pill bg-light text-primary">
          {{$message}}
      </span>
  @enderror
  <div class="input-group input-group-outline my-3">
    <label class="form-label">Phone</label>
    <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" onfocus="focused(this)" onfocusout="defocused(this)">
  </div>
  @error('phone')
  <span class="badge rounded-pill bg-light text-primary">
      {{$message}}
  </span>
@enderror
    <div class="input-group input-group-outline my-3">
      <label class="form-label">Email</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>
    @error('email')
    <span class="badge rounded-pill bg-light text-primary">
        {{$message}}
    </span>
  @enderror
    <div class="input-group input-group-outline mb-3">
      <label class="form-label">Password</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>
    @error('password')
      <span class="badge rounded-pill bg-light text-primary">
        {{$message}}
    </span>
  @enderror
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Password-Confirm</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" onfocus="focused(this)" onfocusout="defocused(this)">
  </div>
  {{-- <div class="form-check form-check-info text-start ps-0">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked="">
    <label class="form-check-label" for="flexCheckDefault">
      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
    </label>
  </div> --}}
    <div class="text-center">
      <button type="submit" class="btn bg-gradient-primary w-100">Sign Up</button>
    </div>
</form>
    @include('layouts.sociallogins')


@endsection



{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
