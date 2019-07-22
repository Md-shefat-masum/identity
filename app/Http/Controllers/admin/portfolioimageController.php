<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Image;
use Session;
use Auth;
use App\portfoliocategory;
use App\portfolioimage;
use App\frontlogo;
use App\frontnavs;

class portfolioimageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $select=portfolioimage::where('status',1)->get();
     	return view('admin.portfolioimage.index',compact('select'));
    }

    public function trash(){
        $select=portfolioimage::where('status',0)->get();
     	return view('admin.portfolioimage.trash',compact('select'));
    }
    public function harddelete(Request $request,$slug){
        $select=portfolioimage::where('slug',$slug)->delete();
     	if($select){
             Session::flash('success','value');
             return redirect()->route('portfolio_image_trash');
         }
    }

    public function add(){
        $select=portfoliocategory::where('status',1)->orderBy('name','asc')->get();
        return view('admin.portfolioimage.add',compact('select'));
    }

    public function addfn(Request $request){
        $slug = 'portImage'.uniqid(20);
        $insert = portfolioimage::insert([
            'image' => '',
            'category' => $_POST['category'],
            'description' => $_POST['description'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $ImageName='portimage'.'_'.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$ImageName);
            portfolioimage::where('slug',$slug)->update([
                'image'=>$ImageName
            ]);
        }

        if($insert){
            Session::flash('success','value');
            return redirect()->route('portfolio_image');
        }
    }

    public function softdelete(Request $request,$slug){
        $update=portfolioimage::where('slug',$slug)->update([
            'status' => 0,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success','value');
            return redirect()->route('portfolio_image');
        }
    }

    public function projectview(){
        $logo=frontlogo::where('id',1)->firstOrFail();
        $nav=frontnavs::get();
        return view('website.project',compact('logo','nav'));
    }
    
}
