@extends('layouts.pagelayout')



@section('dynamic')

<form role="form" action="{{url('settings_updated')}}" method="POST">
    @csrf
    
    <input type="hidden" value="{{$id}}">
    <div class="card mt-4" id="branch_form">
    <div class="card-header">
      <h5>Branch Settings</h5>
    </div>
    <div class="card-body pt-0">
        <div class="row">
            <div class="col-6">
      <div class="input-group input-group-outline">
        <label class="form-label">Tax</label>
        <input type="text" name="tax" value="{{old('tax',$tax)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required="" autocomplete="branch_name">
      </div></div><br>
            
      <div class="col-6">
            <div class="input-group input-group-outline">
        <label class="form-label">Delivery Time In Minutes</label>
        <input type="text" name="deliverytime" value="{{old('deliverytime',$deliverytime)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required="" autocomplete="email">
      </div>
      </div>
        </div>
        <div class="row">
        <div class="col-md-6">
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Takeaway Time In Minutes</label>
            <input type="text" name="takeawaytime" value="{{old('takeawaytime',$takeawaytime)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
          </div>
            </div>

        <div class="col-md-6">
          <div class="input-group input-group-outline my-3">
            <label class="form-label">Dine-In Time</label>
            <input type="text" name="dineintime" value="{{old('dineintime',$dineintime)}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
          </div>
                  </div>
      </div>
        

    <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Submit Settings</button>  
    </div>
  </div>
</form>
@endsection