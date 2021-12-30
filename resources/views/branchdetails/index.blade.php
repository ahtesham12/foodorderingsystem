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
@elseif (session('delete'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
  <span class="text-sm">{{Auth::user()->name .'!'.session('delete')}}</span>
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@elseif (session('bstatus'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
  <span class="text-sm">{{Auth::user()->name .'!'.session('bstatus')}}</span>
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@elseif (session('dstatus'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
  <span class="text-sm">{{Auth::user()->name .'!'.session('dstatus')}}</span>
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@elseif (session('takestatus'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
  <span class="text-sm">{{Auth::user()->name .'!'.session('takestatus')}}</span>
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@elseif (session('dinestatus'))
<div class="alert alert-success alert-dismissible text-white" role="alert">
  <span class="text-sm">{{Auth::user()->name .'!'.session('dinestatus')}}</span>
  <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@endif

<div>
  <a href="{{route('branch_details.create')}}" class="btn btn-primary btn-lg " role="button" aria-pressed="true">Add Branch</a>
</div>
<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Branch Details</h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Branch Name</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Branch Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Branch Address</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delivery</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TakeAway</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dine In</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Settings</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delivery Areas</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payments</th>
                
                </tr>
              </thead>
              <tbody>
                @foreach ( $branchdata as $branch ) 
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      {{-- <div>
                        <img src="{{url('storage/media/defaultlogo.png')}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                      </div> --}}
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$branch->branch_name}}</h6>
                        {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                      </div>
                    </div>
                  </td>
                  <td>
                    @if ($branch->branch_status==1)
                    <a href="{{url('status/0',$branch->id)}}" class="btn btn-danger btn-sm " role="button" aria-pressed="true">Deactivate</a>
                    <p class="text-xs text-secondary mb-0">Branch is Active</p> 
                    <p class="text-xs text-secondary mb-0"> Click to De-Activate</p>
                    @elseif($branch->branch_status==0)
                    <a href="{{url('status/1',$branch->id)}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Activate</a>
                    <p class="text-xs text-secondary mb-0">Branch is In-Active</p> 
                    <p class="text-xs text-secondary mb-0"> Click to Activate</p>
                  </td>
                  @endif

                  <td>
                    <h6 class="mb-0 text-sm">{{$branch->branch_address}}</h6>
                  </td>

                  <td class="align-middle text-center text-sm">
                    @if ($branch->delivery==1)
                    <a href="{{url('delivery/0',$branch->id)}}" class="btn btn-danger btn-sm " role="button" aria-pressed="true">Deactivate</a>
                    <p class="text-xs text-secondary mb-0">Delivery is Active</p> 
                    <p class="text-xs text-secondary mb-0"> Click to De-Activate</p>
                    @elseif($branch->delivery==0)
                    <a href="{{url('delivery/1',$branch->id)}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Activate</a>
                    <p class="text-xs text-secondary mb-0">Delivery is In-Active</p> 
                    <p class="text-xs text-secondary mb-0"> Click to Activate</p>
                    @endif
                  </td>

                  <td class="align-middle text-center text-sm">
                    @if ($branch->takeaway==1)
                    <a href="{{url('takeaway/0',$branch->id)}}" class="btn btn-danger btn-sm " role="button" aria-pressed="true">Deactivate</a>
                    <p class="text-xs text-secondary mb-0">Takeaway is Active</p> 
                    <p class="text-xs text-secondary mb-0"> Click to De-Activate</p>
                    @elseif($branch->takeaway==0)
                    <a href="{{url('takeaway/1',$branch->id)}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Activate</a>
                    <p class="text-xs text-secondary mb-0">Takeaway is In-Active</p> 
                    <p class="text-xs text-secondary mb-0"> Click to Activate</p>
                    @endif
                  </td>
                  <td class="align-middle text-center text-sm">
                  @if ($branch->dine_in==1)
                  <a href="{{url('dine_in/0',$branch->id)}}" class="btn btn-danger btn-sm " role="button" aria-pressed="true">Deactivate</a>
                  <p class="text-xs text-secondary mb-0">Dine-In is Active</p> 
                  <p class="text-xs text-secondary mb-0"> Click to De-Activate</p>
                  @elseif($branch->dine_in==0)
                  <a href="{{url('dine_in/1',$branch->id)}}" class="btn btn-success btn-sm " role="button" aria-pressed="true">Activate</a>
                  <p class="text-xs text-secondary mb-0">Dine-In is Inactive</p> 
                  <p class="text-xs text-secondary mb-0"> Click to Activate</p>
                  @endif
                  </td>
                  <td class="align-top">
                    <a href="{{route('branch_details.edit',$branch->id)}}" class="btn btn-warning btn-sm " role="button" aria-pressed="true">Edit</a>
                    <form action="{{route('branch_details.destroy',$branch->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                  <button class="btn btn-success btn-sm ">Del</button>
                  </form>
                  </td>
                </td>
                <td class="align-top">
                  <a href="{{url('settings')}}" class="btn btn-primary btn-sm " role="button" aria-pressed="true">settings</a>
                  <p class="text-xs text-secondary mb-0">Tax, Delivery, Dine-In,</p>
                  <p class="text-xs text-secondary mb-0">Takeaway Settings</p>
                </td>
                <td class="align-top">
                  <a href="" class="btn btn-primary btn-sm " role="button" aria-pressed="true">Areas</a>
                  <p class="text-xs text-secondary mb-0">Delivery Areas</p>
                </td>
                <td class="align-top">
                  <a href="" class="btn btn-primary btn-sm " role="button" aria-pressed="true">Payments</a>
                  <p class="text-xs text-secondary mb-0">Payment Settings</p>
                </td>
                </tr>
                @endforeach 
              </tbody>
            </table>
            {{$branchdata->links('pagination::bootstrap-4')}}
            
          </div>
        
        </div>
      </div>
    </div>
  </div>

@endsection












