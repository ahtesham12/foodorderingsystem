@extends('layouts.pagelayout')


@section('dynamic')

  <form role="form" action="{{route('branch_details.store')}}"" method="POST" ">
    @csrf
<div class="card mt-4" id="branch_form">
    <div class="card-header">
      <h5>Branch Setup</h5>
    </div>
    <div class="card-body pt-0">
      <div class="input-group input-group-outline">
        <label class="form-label">Branch Name</label>
        <input type="text" name="branch_name" value="{{old('branch_name')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="branch_name">
      </div><br>
      @error('branch_name')
      <div class="alert alert-primary  text-white " role="alert">
       {{$message}}
       </div>
      @enderror
      <div class="input-group input-group-outline">
        <label class="form-label">Branch Address</label>
        <input type="text" name="address" value="{{old('address')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="email">
      </div><p>
        @error('address')
        <div class="alert alert-primary  text-white " role="alert">
         {{$message}}
         </div>
        @enderror
      <div class="row">
        <div class="col-md-6">
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Opening Time</label>
            <input type="time" name="opening" value="{{old('opening')}}" class="form-control">
          </div>
          @error('opening')
          <div class="alert alert-primary  text-white " role="alert">
           {{$message}}
           </div>
          @enderror
        </div>

        <div class="col-md-6">
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Closing Time</label>
            <input type="time" name="closing" value="{{old('closing')}}" class="form-control" >
          </div>
          @error('closing')
          <div class="alert alert-primary  text-white " role="alert">
           {{$message}}
           </div>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="input-group input-group-outline is-valid my-3">
            <select name="days" value="{{old('days')}}" class="form-control" id="exampleFormControlSelect1">   
              <option value="">Select OFF Days - IF Any</option>
              <option value="sunday">Sunday</option>
              <option value="monday">Monday</option>
              <option value="tuesday">Tuesday</option>
              <option value="wednesday">Wednesday</option>
              <option value="thursaday">Thursday</option>
              <option value="friday">Friday</option>
              <option value="saturday">Saturday</option>
            </select>
          </div>
            </div>
  
        <div class="col-md-6">
            <div class="input-group input-group-outline is-valid my-3">
              <select name="delivery" value="{{old('delivery')}}" class="form-control" id="exampleFormControlSelect1">   
                <option value="">Delivery Status</option>
                <option value="1">Active</option>
                <option value="0">In-Active</option>
              </select>
            </div>
            @error('delivery')
            <div class="alert alert-primary  text-white " role="alert">
             {{$message}}
             </div>
            @enderror
              </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="input-group input-group-outline is-valid my-3">
            <select name="takeaway" value="{{old('takeaway')}}" class="form-control" id="exampleFormControlSelect1">   
              <option value="">Takeaway Status</option>
              <option value="1">Active</option>
              <option value="0">In-Active</option>
            </select>
          </div>
          @error('takeaway')
          <div class="alert alert-primary  text-white " role="alert">
           {{$message}}
           </div>
          @enderror
            </div>
 
            <div class="col-md-6">
              <div class="input-group input-group-outline is-valid my-3">
                <select name="dinein" value="{{old('dinein')}}" class="form-control" id="exampleFormControlSelect1">   
                  <option value="">DineIn Status</option>
                  <option value="1">Active</option>
                  <option value="0">In-Active</option>
                </select>
              </div>
              @error('dinein')
              <div class="alert alert-primary  text-white " role="alert">
               {{$message}}
               </div>
              @enderror
                </div>
      </div>
    

    <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Create Branch</button>  
    </div>
  </div>
      {{-- form ends here --}}
    </form>
@endsection



