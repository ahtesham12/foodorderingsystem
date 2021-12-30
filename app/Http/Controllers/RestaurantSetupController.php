<?php

namespace App\Http\Controllers;

use App\Models\RestaurantSetup;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantSetupController extends Controller
{
public function resturSetup(){
    $query=RestaurantSetup::where('user_id','=',Auth::id())->first();
    
    if ($query!=""){
        $array['id']=$query->id;
        $array['name']=$query->name;
        $array['contact_name']=$query->contact_name;
        $array['user_id']=$query->user_id;
        $array['phone']=$query->phone;
        $array['country']=$query->country;
        $array['city']=$query->city;
        $array['address']=$query->address;
        $array['old_logo']=$query->logo;
        $array['contact_email']=$query->contact_email;
        $array['opening']=$query->opening_time;
        $array['closing']=$query->closing_time;
        $array['days']='selected';
    
        
        
    }
    else{
        $array['id']="";
        $array['name']="";
        $array['contact_name']="";
        $array['user_id']=Auth::id();
        $array['phone']="";
        $array['country']="";
        $array['city']="";
        $array['address']="";
        $array['old_logo']="";
        $array['contact_email']="";
        $array['opening']="";
        $array['closing']="";
        $array['days']="";
    }
    
    
return view('settings.restaurantsetup',$array);
return view('settings.branch',$array);
}

public function resturCreated(Request $request){

$input_data=$request->all();
// dd($input_data);

if ($input_data['id']!="") {
    $image_required='';
    $unique_res='';
    $unique_email='';
    $unique_phone='';
}
else{
    $image_required='required';
    $unique_res='unique:restaurant_setups,name';
    $unique_email='unique:restaurant_setups,contact_email';
    $unique_phone='unique:restaurant_setups,phone';
}

if ($request->hasFile('logo')) {
    $image_name=$input_data['logo']->getClientOriginalName();
    $input_data['logo']->storeAs('public/media/',$image_name);
    
}
else {
    $image_name=$input_data['old_logo'];
}

$request->validate([
'restaurant_name'=>['required', $unique_res,'max:35'],
'contact_name'=>['required','max:35'],
'email'=>['required','email','max:35',$unique_email],
'phone'=>['required','string',$unique_phone,'min:11','max:11'],
'country'=>['required','string','min:3'],
'city'=>['string','min:3',],
'address'=>['required','string','max:60'],
'logo'=>['mimes:jpg,jpeg,png','max:1000',$image_required],
'opening'=>['required','max:25'],
'closing'=>['required','max:25'],



]);

if ($input_data['id']==""){
    $new_setings=new RestaurantSetup();
    $new_setings->name=$input_data['restaurant_name'];
    $new_setings->user_id=$input_data['user_id'];
    $new_setings->phone=$input_data['phone'];
    $new_setings->contact_name=$input_data['contact_name'];
    $new_setings->country=$input_data['country'];
    $new_setings->city=$input_data['city'];
    $new_setings->address=$input_data['address'];
    $new_setings->logo=$image_name;
    $new_setings->contact_email=$input_data['email'];
    $new_setings->opening_time=$input_data['opening'];
    $new_setings->closing_time=$input_data['closing'];
    $new_setings->off_days=$input_data['days'];
    
    $new_setings->save();
    
    $message=$input_data['restaurant_name'].'  Restaurant Setup Created Successfully';
}
else{
    $update_setings=RestaurantSetup::where('id','=',$input_data['id'])->first();
    $update_setings->name=$input_data['restaurant_name'];
    $update_setings->user_id=$input_data['user_id'];
    $update_setings->phone=$input_data['phone'];
    $update_setings->contact_name=$input_data['contact_name'];
    $update_setings->country=$input_data['country'];
    $update_setings->city=$input_data['city'];
    $update_setings->address=$input_data['address'];
    $update_setings->logo=$image_name;
    $update_setings->contact_email=$input_data['email'];
    $update_setings->opening_time=$input_data['opening'];
    $update_setings->closing_time=$input_data['closing'];
    $update_setings->off_days=$input_data['days'];
    $update_setings->save();
    
    $message=$input_data['restaurant_name'].'  Restaurant Setup Updated Successfully';

}
    
return redirect()->back()->with('message',$message);
}
}
// $query=RestaurantSetup::where('user_id','=',Auth::id())->first();

// if ($query!=""){
//     $image_validation=['mimes:jpg,jpeg,png','max:1000'];
// }
// else{
//     $image_validation=['required','mimes:jpg,jpeg,png','max:1000'];
// }
    
// $request->validate([

// 'restaurant_name'=>['required','unique:restaurant_setups,name','max:35'],
// 'contact_name'=>['required','max:35'],
// 'email'=>['required','email','max:35','unique:restaurant_setups,contact_email'],
// 'phone'=>['required','string','unique:restaurant_setups,phone','min:11','max:11'],
// 'country'=>['required','string','min:3'],
// 'city'=>['string','min:3',],
// 'address'=>['required','string','max:60'],
// 'logo'=>['required','mimes:jpg,jpeg,png','max:1000']

// ]);

// $data=$request->all();

// if ($request->hasFile('logo')){
//     $image_name=$data['logo']->getClientOriginalName();
//     $data['logo']->storeAs('public/media/',$image_name);
// }

// if ($query==""){
//     $restaurant=new RestaurantSetup();
    
//     $restaurant->name=$data['restaurant_name'];
//     $restaurant->user_id=Auth::id();
//     $restaurant->contact_name=$data['contact_name'];
//     $restaurant->contact_email=$data['email'];
//     $restaurant->phone=$data['phone'];  
//     $restaurant->country=$data['country'];
//     $restaurant->city=$data['city'];
//     $restaurant->address=$data['address'];
//     $restaurant->logo=$image_name;
//     $restaurant->save();    
    
// }

// return redirect()->back()->with('message','Restaurant Setup Updated Successfully');