@extends('layouts.auth')
@section('title','HOB-Sign In')
@section('sign','Sign In')
@section('facebook','Sign In With Facebook')
@section('google','Sign In With Google')
@section('auth_url')
{{route('register')}}
@endsection
@section('auth_text','Sign Up')
{{-- @section('enter_fields')
<form method="POST" action="{{ route('login') }}">
    @csrf    
    <div class="input-group input-group-outline my-3">
      <label class="form-label">Email</label>
      <input type="email" id="email" name="email" value="{{old('name')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="'email">
    </div>
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    <div class="input-group input-group-outline mb-3">
      <label class="form-label">Password</label>
      <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="current-password">
    </div>
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    <p class="mt-4 text-sm text-right">
        <a href="{{route('password.request')}}" class="text-primary text-gradient font-weight-bold">Forgot Password ?</a>
    </p>
    <div class="form-check form-switch d-flex align-items-center ">
      <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
      <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
    </div>
   
    <div class="text-center">
      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
    </div>
</form>
    <p class="mt-4 text-sm text-right">
      Don't have an account?
      <a href="{{route('register')}}" class="text-primary text-gradient font-weight-bold">Sign up</a>
    </p>
 
@endsection --}}




{{-- @section('enter_fields')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
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

                        <div class="row mb-3">
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

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
{{-- @endsection --}}



@section('enter_fields')
<form role="form" class="text-start" action="{{route('login')}}" method="POST">
    @csrf
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
      <input id="password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" onfocus="focused(this)" onfocusout="defocused(this)">
    </div>
      @error('password')
      <span class="badge rounded-pill bg-light text-primary">
        {{$message}}
    </span>
  @enderror
  <p class="mt-4 text-sm text-right">
    <a href="{{route('password.request')}}" class="text-primary text-gradient font-weight-bold">Forgot Password ?</a>
</p>
    <div class="form-check form-switch d-flex align-items-center mb-3">
      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
      <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
    </div>
    <div class="text-center">
      <button type="submit" class="btn bg-gradient-primary w-100">Sign in</button>
    </div>
</form>
@include('layouts.sociallogins')
@endsection