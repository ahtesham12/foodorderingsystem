@extends('layouts.pagelayout')

@section('dynamic')
@if(session('created'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
    <span class="text-sm">{{Auth::user()->name .'!'.session('created')}}</span>
    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
@elseif (session('updated'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
  <span class="text-sm">{{Auth::user()->name .'!'.session('updated')}}</span>
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@elseif (session('fstatus'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
    <span class="text-sm">{{Auth::user()->name .'!'.session('fstatus')}}</span>
    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
@elseif (session('delete'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
    <span class="text-sm">{{Auth::user()->name .'!'.session('delete')}}</span>
    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
@endif


{{-- Add Button --}}
<a href="{{route('menu_category.create')}}" class="btn btn-primary btn-lg " role="button" aria-pressed="true">Add Category</a>


<div class="row">
<div class="col-12">
<div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3">Menu Category</h6>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category Name</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Banner</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Featured Status</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Active Status</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $category)
            <tr>
              <td>
                <div class="d-flex px-2 py-1">
                  <div>
                    <img src="{{url('storage/media/defaultlogo.png')}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                  </div>
                  <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">{{$category->name}}</h6>
                
                  </div>
                </div>
              </td>
              <td>
                <img src="{{'storage/media/'.$category->banner}}" height="50px" width="100px">
              </td>
              <td class="align-middle text-center text-sm">
                <p class="text-xs font-weight-bold mb-0">{{$category->description}}</p>
              </td>
              <td class="align-middle text-center text-sm">
                @if($category->is_popular_category==1)
                <a href="{{url('menu_category/featured/0',$category->id)}}" class="btn btn-danger btn-sm " role="button" aria-pressed="true">Deactivate</a>
                <p class="text-xs text-secondary mb-0">Featured Status is In-Active</p> 
                <p class="text-xs text-secondary mb-0"> Click to De-Activate</p>
                @elseif($category->is_popular_category==0)
                <a href="{{url('menu_category/featured/1',$category->id)}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Activate</a>
                <p class="text-xs text-secondary mb-0">Category Is Inactive</p> 
                <p class="text-xs text-secondary mb-0"> Click to Activate</p>
                @endif
                </td>
              <td class="align-middle text-center text-sm">
                @if($category->is_active==1)
                <a href="{{url('menu_category/status/0',$category->id)}}" class="btn btn-danger btn-sm " role="button" aria-pressed="true">Deactivate</a>
                <p class="text-xs text-secondary mb-0">Category is In-Active</p> 
                <p class="text-xs text-secondary mb-0"> Click to De-Activate</p>
                @elseif($category->is_active==0)
                <a href="{{url('menu_category/status/1',$category->id)}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Activate</a>
                <p class="text-xs text-secondary mb-0">Category Is Inactive</p> 
                <p class="text-xs text-secondary mb-0"> Click to Activate</p>
                @endif
                </td>
              <td class="align-top">
                <a href="{{route('menu_category.edit',$category->id)}}" class="btn btn-warning btn-sm " role="button" aria-pressed="true">Edit</a>
                <form action="{{route('menu_category.destroy',$category->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
              <button class="btn btn-success btn-sm ">Del</button>
              </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{$data->links('pagination::bootstrap-4')}}
      </div>
    </div>
  </div>
</div>
</div>
@endsection