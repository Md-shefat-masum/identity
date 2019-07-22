<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\personalinfo;
use Carbon\ Carbon;
use Image;
use Session;
use Auth;

class personalinfoController extends Controller
{
    public function index(Request $request){
        return view('admin.personal_info.index');
      //return view('index');
    }
    public function icons(Request $request){
        return view('admin.personal_info.icon');
      //return view('index');
    }

    public function add(Request $request){
        $slug = 'slug'.uniqid(20);
        $insert = personalinfo::insert([
            'icon' => $_POST['icon'],
            'link' => $_POST['link'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('social_link');
        }
    }
}