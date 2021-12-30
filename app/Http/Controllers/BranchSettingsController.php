<?php

namespace App\Http\Controllers;

use App\Models\BranchSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BranchSettingsController extends Controller
{
    
    public function index()
    {
        $branch_settings=BranchSettings::where('user_id','=',Auth::id())->first();
        
        if ($branch_settings!=""){
            $setting['id']=$branch_settings->id;
            $setting['user_id']=Auth::id();
            $setting['tax']=$branch_settings->tax;
            $setting['deliverytime']=$branch_settings->delivery_time;
            $setting['takeawaytime']=$branch_settings->takeaway_time;
            $setting['dineintime']=$branch_settings->dine_in_time;
        }
        else {
            $setting['id']="";
            $setting['user_id']=Auth::id();
            $setting['tax']="";
            $setting['deliverytime']="";
            $setting['takeawaytime']="";
            $setting['dineintime']="";
        }

        return view('branchdetails.branchsettings',$setting);
        
        
    }

    public function submit(Request $request){
        $data=$request->all();
        
        $request->validate([
            'tax'=>'required|numeric',
            'deliverytime'=>'required|integer',
            'takeawaytime'=>'required|integer',
            'dineintime'=>'required|integer',
        ]);
        
        dd($data);
        if ($data['id']==""){
            $add_settings=new BranchSettings();
            
            $add_settings->user_id=Auth::id();
            $add_settings->tax=$data['tax'];
            $add_settings->delivery_time=$data['deliverytime'];
            $add_settings->takeaway_time=$data['takeawaytime'];
            $add_settings->dine_in_time=$data['dineintime'];
            $add_settings->save();
            
            $message=' You have added the branch settings successfully ';
            
        }

        else {
            $update_settings=BranchSettings::where('id',$data['id'])->first();
            $update_settings->tax=$data['tax'];
            $update_settings->delivery_time=$data['deliverytime'];
            $update_settings->takeaway_time=$data['takeawaytime'];
            $update_settings->dine_in_time=$data['dineintime'];
            $update_settings->save();
            $message=' You have updated the branch settings successfully';
            
        }

        return redirect(route('branch_details.index'))->with('settings',$message);

        }
    }