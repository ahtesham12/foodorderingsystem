@extends('layouts.pagelayout')



@section('dynamic')

@if (session('message'))
<div class="alert alert-light alert-dismissible text-primary  " role="alert">
  <span class="text-sm">{{session('message')}}</span>
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@endif

<div class="card card-body" id="profile">
    <div class="row justify-content-center align-items-center">
      <div class="col-sm-auto col-4">
        <div class="avatar avatar-xl position-relative">
          @if ($old_logo=="")
          <img src="../../../assets/img/bruce-mars.jpg" alt="logo" class="w-100 rounded-circle shadow-sm">
          @else
          <img src="{{url('storage/media/'.$old_logo)}}" alt="log" class="w-100 rounded-circle shadow-sm">
          @endif
        </div>
      </div>
      <div class="col-sm-auto col-8 my-auto">
        <div class="h-100">
          <h5 class="mb-1 font-weight-bolder">
            @if ($name!="")
              {{$name}}           
            @else
             Restaurant Name            
            @endif
          </h5>
          <p class="mb-0 font-weight-normal text-sm">
            @if ($contact_name!="")
              {{$contact_name}}
            @else
              Contact Name
            @endif
          </p>
        </div>
      </div>
      <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
    {{-- add anything here start left --}}
      </div>
    </div>
  </div>
  <form role="form" action="{{route('restur.created')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <input type="hidden" name="id" value="{{$id}}">
  <input type="hidden" name="user_id" value="{{$user_id}}">
  <input type="hidden" name="old_logo" value="{{$old_logo}}">
<div class="card mt-4" id="restaurant_form">
    <div class="card-header">
      <h5>Restaurant Setup</h5>
    </div>
    <div class="card-body pt-0">
      <div class="input-group input-group-outline">
        <label class="form-label">Restaurant Name</label>
        <input type="text" name="restaurant_name" value="{{old('restaurant_name',$name)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="restaurant_name">
      </div>
 @error('restaurant_name')
 <div class="alert alert-primary  text-white " role="alert">
  {{$message}}
  </div>
 @enderror
      <div class="input-group input-group-outline my-4">
        <label class="form-label">Contact Name</label>
        <input type="text" name="contact_name" value="{{old('contact_name',$contact_name)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="contact_name">
      </div>  
      @error('contact_name')
      <div class="alert alert-primary  text-white " role="alert">
        {{$message}}
      </div>
     @enderror
      <div class="input-group input-group-outline">
        <label class="form-label">Contact Email</label>
        <input type="email" name="email" value="{{old('email',$contact_email)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="email">
      </div><br>
      @error('email')
      <div class="alert alert-primary  text-white " role="alert">
        {{$message}}
      </div>
     @enderror
      <div class="input-group input-group-outline">
        <label class="form-label">Contact Phone</label>
        <input type="phone" name="phone" value="{{old('phone',$phone)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="phone">
      </div><br>
      @error('phone')
      <div class="alert alert-primary  text-white " role="alert">
        {{$message}}
      </div>
     @enderror
      <div class="input-group input-group-outline">
        <label class="form-label">Country</label>
        <input type="text" name="country" value="{{old('country',$country)}}" class="form-control"  onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="country">
      </div><br>
      @error('country')
      <div class="alert alert-primary  text-white " role="alert">
        {{$message}}
      </div>
     @enderror
      <div class="input-group input-group-outline">
        <label class="form-label">City</label>
        <input type="text" name="city" value="{{old('city',$city)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="city">
      </div><br>
      @error('city')
      <div class="alert alert-primary  text-white " role="alert">
        {{$message}}
      </div>
     @enderror
      <div class="input-group input-group-outline">
        <label class="form-label">Address</label>
        <input type="text" name="address" value="{{old('address',$address)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="address">
      </div><br>
      @error('address')
      <div class="alert alert-primary  text-white " role="alert">
        {{$message}}
      </div>
     @enderror
      <div class="input-group input-group-outline">
        <input class="form-control form-control-lg" id="formFileLg" name="logo" type="file">
      </div>
      @error('logo')
      <div class="alert alert-primary  text-white " role="alert">
        {{$message}}
      </div>
     @enderror
     <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Opening Time</label>
          <input type="time" name="opening" value="{{old('opening',$opening)}}" class="form-control">
        </div>
      </div>
      @error('opening')
      <div class="alert alert-primary  text-white " role="alert">
        {{$message}}
      </div>
     @enderror
      <div class="col-md-6">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Closing Time</label>
          <input type="time" name="closing" value="{{old('closing',$closing)}}" class="form-control" >
        </div>
      </div>
      @error('closing')
      <div class="alert alert-primary  text-white " role="alert">
        {{$message}}
      </div>
     @enderror
    </div>

    <div class="row">
      <div class="col-md-6">
    <div class="input-group input-group-static mb-4">
      <label for="exampleFormControlSelect1" class="ms-0">OFF Days If Any</label>
      <select name="days" class="form-control" id="exampleFormControlSelect1">   
      
        <option value="">Select OFF Days</option>
        <option value="sunday" {{$days}}>Sunday</option>
        <option value="monday" {{$days}}>Monday</option>
        <option value="tuesday" {{$days}}>Tuesday</option>
        <option value="wednesday" {{$days}}>Wednesday</option>
        <option value="thursaday" {{$days}}>Thursday</option>
        <option value="friday" {{$days}}>Friday</option>
        <option value="saturday" {{$days}}>Saturday</option>
      </select>
    </div>
      </div>
    </div>
    @if($user_id=='')
      <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Create Restaurant</button>  
    @else
    <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Update Restaurant</button>  
    @endif
    </div>
  </div>
      {{-- form ends here --}}
    </form>
@endsection