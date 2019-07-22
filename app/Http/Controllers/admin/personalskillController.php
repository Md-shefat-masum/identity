<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Image;
use Session;
use Auth;
use App\personalskill;

class personalskillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $select=personalskill::where('status',1)->get();
        return view('admin.skill.index',compact('select'));
    }

    public function add(){
        return view('admin.skill.add');
    }

    public function addfn(){
        $slug = 'skill'.uniqid(20);
        $insert = personalskill::insert([
            'name' => $_POST['name'],
            'percentage' => $_POST['percentage'],
            'description' => $_POST['description'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('skills');
        }
    }
    public function updatefn(Request $request,$slug){
        // $slug = 'skill'.uniqid(20);
        $insert = personalskill::where('slug',$slug)->update([
            'name' => $_POST['name'],
            'percentage' => $_POST['percentage'],
            'description' => $_POST['description'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('skills');
        }
    }
    public function deletefn(Request $request,$slug){
        // $slug = 'skill'.uniqid(20);
        $insert = personalskill::where('slug',$slug)->delete();

        if($insert){
            Session::flash('success','value');
            return redirect()->route('skills');
        }
    }
}
