@extends('layouts.auth')
@section('title','Email Verification')
@section('sign','Email Verification')

@section('enter_fields')

@if (session('resent'))
<div class="alert alert-light alert-dismissible fade show  text-primary " role="alert">
    <span class="alert-icon align-middle">
      <span class="material-icons text-md">
        thumb_up_off_alt
      </span>
    </span>
    <span class="alert-text"><strong>Email Send !</strong> A fresh verification link has been sent to your email address.!</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true" class="text-primary">×</span>
    </button>
     </div>
@endif

<div class="alert alert-light text-primary" role="alert">
    <h4 class="alert-heading">Please Verify Your Email !</h4>
    <p>Before proceeding, please check your email for a verification link.</p>
    <hr>
    <p class="mb-0">If you did not receive the email,</p>
  </div>


<form action="{{route('verification.resend')}}" method="POST" class="text-start">
    @csrf

    <div class="text-center">
      <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Click Here To Request Another</button>
    </div>
</form>
@endsection


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
