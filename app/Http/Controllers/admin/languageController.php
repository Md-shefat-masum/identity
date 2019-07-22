<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Image;
use Session;
use Auth;
use App\languageskill;

class languageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $select=languageskill::where('status',1)->get();
        return view('admin.languageskill.index',compact('select'));
    }

    public function add(){
        return view('admin.languageskill.add');
    }

    public function addfn(){
        $slug = 'lskill'.uniqid(20);
        $insert = languageskill::insert([
            'name' => $_POST['name'],
            'percentage' => $_POST['percentage'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('lskills');
        }
    }
    public function updatefn(Request $request,$slug){
        // $slug = 'skill'.uniqid(20);
        $insert = languageskill::where('slug',$slug)->update([
            'name' => $_POST['name'],
            'percentage' => $_POST['percentage'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('lskills');
        }
    }
    public function deletefn(Request $request,$slug){
        // $slug = 'skill'.uniqid(20);
        $insert = languageskill::where('slug',$slug)->delete();

        if($insert){
            Session::flash('success','value');
            return redirect()->route('lskills');
        }
    }
}
