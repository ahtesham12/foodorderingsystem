<div class="text-left">
  <a href="{{route('login.facebook')}}"><button type="submit" class="btn bg-gradient-info w-100">@yield('facebook')</button></a>
  </div>
  <div class="text-left">
    <a href="{{route('login.google')}}"><button type="submit" class="btn bg-gradient-danger w-100">@yield('google')</button></a>
    
    <div class="mt-4 text-sm text-center">
      Don't have an account?
      <a href="@yield('auth_url')" class="text-primary text-gradient font-weight-bold">@yield('auth_text')</a>
    </div>