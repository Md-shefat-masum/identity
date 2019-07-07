<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\banner;
use Carbon\Carbon;
use Image;
use Session;


class bannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $select=banner::where('status',1)->get();
     	return view('admin.banner.index',compact('select'));
    }

    public function add()
    {
     	return view('admin.banner.add');
    }

    public function addbanner(Request $request)
    {
         $slug = 'banner'.uniqid(20);

         $insert=banner::insert([
            'name'=>'',
            'subtitle'=>$_POST['subtitle'],
            'title'=>$_POST['title'],
            'slug'=>$slug
         ]);

         if($request->hasFile('name')){
            $image=$request->file('name');
            $ImageName='banner'.'_'.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$ImageName);
            banner::where('slug',$slug)->update([
                'name'=>$ImageName
            ]);
        }

        if($insert){
            return redirect()->route('frontend_banner');
        }


    }

    public function update(Request $request,$slug)
    {
        $item=banner::where('slug',$slug)->firstOrFail();
     	return view('admin.banner.update',compact('item'));
    }

    public function update_banner(Request $request,$slug){
        $update=banner::where('slug',$slug)->update([
            'title' => $_POST['title'],
            'subtitle' => $_POST['subtitle'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('name')){
            $image=$request->file('name');
            $ImageName='banner'.'_'.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$ImageName);
            banner::where('slug',$slug)->update([
                'name'=>$ImageName
            ]);
        }

        if($update){
            Session::flash('success','value');
            return redirect()->route('frontend_banner');
        }
    }

    public function softdelete(Request $request , $slug){
        $update=banner::where('slug',$slug)->update([
            'status' => 0,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        if($update){
            Session::flash('deleted','value');
            return redirect()->route('frontend_banner_trash_view');
        }
    }

    public function restore(Request $request , $slug){
        $update=banner::where('slug',$slug)->update([
            'status' => 1,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        if($update){
            Session::flash('restore','value');
            return redirect()->route('frontend_banner');
        }
    }

    public function trashview(Request $request){
        $select=banner::where('status',0)->get();
     	return view('admin.banner.trash',compact('select'));
    }

    public function delete(Request $request ,$slug){
        $delete = banner::where('slug',$slug)->delete();
        if($delete){
            Session::flash('deleted','value');
            return redirect()->route('frontend_banner_trash_view');
        }
    }
}
