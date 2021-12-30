@extends('layouts.pagelayout')

@section('dynamic')

<form role="form" action="{{route('menu_category.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card mt-4" id="branch_form">
    <div class="card-header">
      <h5>Branch Setup</h5>
    </div>
    <div class="card-body pt-0">
      <div class="input-group input-group-outline">
        <label class="form-label">Category Name</label>
        <input type="text" name="categoryname" value="{{old('categoryname')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="categoryname">
      </div><br>
      @error('categoryname')
      <div class="alert alert-primary  text-white " role="alert">
       {{$message}}
       </div>
      @enderror
      
      <div class="input-group input-group-outline">
        <label class="form-label">Description</label>
        <input type="text" name="description" value="{{old('description')}}" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required autocomplete="description">
      </div><p>
        @error('description')
        <div class="alert alert-primary  text-white " role="alert">
         {{$message}}
         </div>
        @enderror
    
        <div class="input-group input-group-static">
            <label for="exampleFormControlSelect2" class="ms-0">Select One Or Multiple Menu Labels</label>
            <select multiple="" name="labels[]" class="form-control pb-4" id="exampleFormControlSelect2">
              @foreach($labeldata as $labels)
              <option value={{$labels->id}}>{{$labels->dishes_names}}</option>
              @endforeach
            </select>
          </div><p>
            @error('labels')
            <div class="alert alert-primary  text-white " role="alert">
             {{$message}}
             </div>
            @enderror
            <div class="input-group input-group-static my-3">
                <label>Category Banner</label>
            <input class="form-control form-control-lg" id="formFileLg" name="banner" type="file" onfocus="focused(this)" onfocusout="defocused(this)">
          </div>
          @error('banner')
          <div class="alert alert-primary  text-white " role="alert">
           {{$message}}
           </div>
          @enderror
            <div class="input-group input-group-outline is-valid my-3">
                <select name="is_popular" value="{{old('is_popular')}}" class="form-control" id="exampleFormControlSelect1">   
                  <option value="">Is Featured Category</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
              @error('is_popular')
              <div class="alert alert-primary  text-white " role="alert">
               {{$message}}
               </div>
              @enderror
              <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Create Category</button>  
            </div>

        </form>
    
@endsection