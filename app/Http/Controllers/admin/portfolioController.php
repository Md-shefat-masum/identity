<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Image;
use Session;
use Auth;
use App\portfoliocategory;

class portfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $select=portfoliocategory::where('status',1)->orderBy('name','asc')->get();
        return view('admin.portfoliocat.index',compact('select'));
    }
    public function add(){
        return view('admin.portfoliocat.add');
    }
    public function addfn(Request $request){
        $slug = 'category'.uniqid(20);
        $insert = portfoliocategory::insert([
            'name' => $_POST['name'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('fortfolio_categories');
        }
    }
    public function trash(){
        $select=portfoliocategory::where('status',0)->orderBy('name','asc')->get();
        return view('admin.portfoliocat.trash',compact('select'));
    }
    public function update(Request $request,$slug){
        $update=portfoliocategory::where('slug',$slug)->update([
            'name' => $_POST['name'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success','value');
            return redirect()->route('fortfolio_categories');
        }
    }

    public function softdelete(Request $request,$slug){
        $update=portfoliocategory::where('slug',$slug)->update([
            'status' => 0,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success','value');
            return redirect()->route('fortfolio_categories_trash');
        }
    }

    public function harddelete(Request $request,$slug){
        $update=portfoliocategory::where('slug',$slug)->delete();

        if($update){
            Session::flash('success','value');
            return redirect()->route('fortfolio_categories_trash');
        }
    }
}
