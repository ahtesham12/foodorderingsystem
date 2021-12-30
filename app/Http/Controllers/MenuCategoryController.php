<?php

namespace App\Http\Controllers;

use App\Models\DishLabel;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=MenuCategory::paginate(5);
        // dd($data);
        return view('menucategory.index',compact('data'));
    }


    public function popularStatus($status,$id){

        if ($status==0){
            $stat='activate';
        }
        else{
            $stat='deactivate';
        }
        
        $statusupdate=MenuCategory::find($id);
        $statusupdate->is_active=$status;
        $statusupdate->save();
        return redirect(route('menu_category.index'))->with('fstatus',' you have successfully '.$stat.' Menu Featured Status. ');
    
    }


    public function activeStatus($status,$id){

        if ($status==0){
            $stat='activate';
        }
        else{
            $stat='deactivate';
        }
        
        $statusupdate=MenuCategory::find($id);
        $statusupdate->is_active=$status;
        $statusupdate->save();
        return redirect(route('menu_category.index'))->with('astatus',' you have successfully '.$stat.' Menu Category. ');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labeldata=DishLabel::all();
        // echo ($labeldata);
        // dd($labeldata);
            return view('menucategory.create',compact('labeldata'));
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
            'categoryname'=>'required|max:25',
            'description'=>'required|max:60',
            'banner'=>'required',
            'labels'=>'required',
            'is_popular'=>'required',
        ]);

        if ($request->hasFile('banner')){
            $bannername=$data['banner']->getClientOriginalName();
            $data['banner']->storeAs('public/media/',$bannername);
        }
        
        MenuCategory::create([
            'name'=>$data['categoryname'],
            'banner'=>$bannername,
            'description'=>$data['description'],
            'is_popular_category'=>$data['is_popular'],
            'dishlabel_id'=>json_encode($data['labels']),
        ]);
        
        return redirect(route('menu_category.index'))->with('created',' you have successfully created Category.');
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu_category  $menu_category
     * @return \Illuminate\Http\Response
     */
    public function show(MenuCategory $MenuCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
    /**
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id,Request $request)
    {
        $data=MenuCategory::find($id);
        $labeldata=DishLabel::all();
      
        return view('menucategory.edit',compact('data','labeldata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu_category  $menu_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuCategory $MenuCategory)
    {
        $data=$request->all();
            
        $request->validate([
            'categoryname'=>'required|max:25',
            'description'=>'required|max:60',
            'labels'=>'required',
            'is_popular'=>'required',
        ]);

        if ($request->hasFile('banner')){
            $bannername=$data['banner']->getClientOriginalName();
            $data['banner']->storeAs('public/media/',$bannername);
            }
        else{
            $bannername=MenuCategory::select('banner')->where('id',$MenuCategory->id)->first();
           
        }
        
        MenuCategory::where('id',$MenuCategory->id)->update([
            'name'=>$data['categoryname'],
            'banner'=>$bannername,
            'description'=>$data['description'],
            'is_popular_category'=>$data['is_popular'],
            'dishlabel_id'=>json_encode($data['labels']),
        ]);

        return redirect(route('menu_category.index'))->with('created',' you have successfully updated Category.');
              
    }

    
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        MenuCategory::where('id',$id)->delete();
        
        return redirect(route('menu_category.index'))->with(
            'delete',' you have successfully deleted Category.'
        );
}
}