<?php

namespace App\Http\Controllers;

use App\Models\BranchDetails;
use App\Models\RestaurantSetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BranchDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data=RestaurantSetup::select('logo')->where('user_id','=',Auth::id())->first();
        
        $branchdata=BranchDetails::paginate(5);
        return view('branchdetails.index',compact('branchdata'));
    }
    
    public function branchStatus($status,$id){
        if ($status==0){
            $stat='activate';
        }
        else{
            $stat='deactivate';
        }
        
        $statusupdate=BranchDetails::find($id);
        $statusupdate->branch_status=$status;
        $statusupdate->save();
        return redirect(route('branch_details.index'))->with('bstatus',' you have successfully '.$stat.' your Branch. ');
    }

    public function deliveryStatus($status,$id){
        


        if ($status==0){
            $stat='activate';
        }
        else{
            $stat='deactivate';
        }
        
        $statusupdate=BranchDetails::find($id);
        $statusupdate->delivery=$status;
        $statusupdate->save();
        return redirect(route('menu_category.index'))->with('dstatus',' you have successfully '.$stat.' your Delivery. ');
    
    }

    public function takeawayStatus($status,$id){
        if ($status==0){
            $stat='activate';
        }
        else{
            $stat='deactivate';
        }
        
        $statusupdate=BranchDetails::find($id);
        $statusupdate->takeaway=$status;
        $statusupdate->save();
        return redirect(route('branch_details.index'))->with('takestatus',' you have successfully '.$stat.' your TakeAway. ');
    
    }

    public function dineIn($status,$id){
        if ($status==0){
            $stat='activate';
        }
        else{
            $stat='deactivate';
        }
        
        $statusupdate=BranchDetails::find($id);
        $statusupdate->dine_in=$status;
        $statusupdate->save();
        return redirect(route('branch_details.index'))->with('dinestatus',' you have successfully '.$stat.' your Dine-In. ');
    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branchdetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        
        $request->validate([
            'branch_name'=>'required|unique:branch_details,branch_name',
            'address'=>'required|max:40',
            'opening'=>'required',
            'closing'=>'required',
            'delivery'=>'required',
            'takeaway'=>'required',
            'dinein'=>'required',
        ]);
        
        $branchcreate=new BranchDetails();
        $branchcreate->branch_name=$data['branch_name'];
        $branchcreate->branch_address=$data['address'];
        $branchcreate->delivery=$data['delivery'];
        $branchcreate->takeaway=$data['takeaway'];
        $branchcreate->dine_in=$data['dinein'];
        $branchcreate->opening_time=$data['opening'];
        $branchcreate->closing_time=$data['closing'];
        $branchcreate->off_days=$data['days'];
        $branchcreate->save();
        
        return redirect(route('branch_details.index'))->with('created',' you have successfully created Branch.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BranchDetails  $branchDetails
     * @return \Illuminate\Http\Response
     */
    public function show(BranchDetails $branchDetails)
    {
        //
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\BranchDetails  $branchDetails
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(BranchDetails $branchDetails)
    // {
    //     // $data=BranchDetails::where('id','=',$branchDetails->id)->first();
    //     $data=DB::table('branch_details')->select('*')->where('id','=',$branchDetails->id)->get();
    //     dd($data);
    //     return view('branchdetails.edit',compact('data'));
        
        
    // }
     /**
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $data=BranchDetails::find($id);
    //    dd($data);
       if ($data->off_days!=""){
           $d='selected';
       }
       else {
           $d='';
       }
       
       
       return view('branchdetails.edit',compact('data','d')); 
   }
    

    /**
     * Update the specified resource in storage.
     *
    * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $data=$request->all();
 

        $request->validate([
            'branch_name'=>'required',
            'address'=>'required|max:40',
            'opening'=>'required',
            'closing'=>'required',
            'delivery'=>'required',
            'takeaway'=>'required',
            'dinein'=>'required',
        ]);

        $update=BranchDetails::find($id);
        $update->branch_name=$data['branch_name'];
        $update->branch_address=$data['address'];
        $update->delivery=$data['delivery'];
        $update->takeaway=$data['takeaway'];
        $update->dine_in=$data['dinein'];
        $update->opening_time=$data['opening'];
        $update->closing_time=$data['closing'];
        $update->off_days=$data['days'];
        $update->save();
  
        return redirect(route('branch_details.index'))->with('updated',' you have successfully updated Branch.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // echo'yess';
        BranchDetails::where('id',$id)->delete();
        
        return redirect(route('branch_details.index'))->with(
            'delete',' you have successfully deleted Branch.'
        );
    

    }
    
}