<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Image;
use Session;
use Auth;
use App\service;

class serviceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $select = service::where('status',1)->orderBy('id','desc')->get();
        return view('admin.service.index',compact('select'));
    }

    public function trash(){
        $select = service::where('status',0)->orderBy('id','desc')->get();
        return view('admin.service.trash',compact('select'));
    }

    public function add(){
        return view('admin.service.add');
    }

    public function addfn(Request $request){
        $slug='service'.uniqid(20);
        $insert=service::insert([
            'icon' => $_POST['icon'],
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);
        
        if($insert){
            Session::flash('success','value');
            return redirect()->route('frontend_service');
        }
    }

    public function update(Request $request,$slug){
        $update = service::where('slug',$slug)->update([
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'icon' => $_POST['icon'],
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success','value');
            return redirect()->route('frontend_service');
        }
    }

    public function softdelete(Request $request,$slug){
        $update = service::where('slug',$slug)->update([
            'status' => 0,
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success','value');
            return redirect()->route('frontend_service_trash');
        }
    }

    public function harddelete(Request $request,$slug){
        $delete = service::where('slug',$slug)->delete();
        if($delete){
            Session::flash('success','value');
            return redirect()->route('frontend_service_trash');
        }
    }

    public function restore(Request $request,$slug){
        $update = service::where('slug',$slug)->update([
            'status' => 1,
            'updated_at'=> Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success','value');
            return redirect()->route('frontend_service');
        }
    }
}
