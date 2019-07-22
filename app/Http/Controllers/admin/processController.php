<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\process;
use Carbon\ Carbon;
use Image;
use Session;
use Auth;

class processController extends Controller
{
    public function index(Request $request){
        $select = process::get();
        return view('admin.process.index',compact('select'));
    }

    public function add(Request $request){
        $slug = 'slug'.uniqid(20);
        $insert = process::insert([
            'icon' => $_POST['icon'],
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'serial' => $_POST['serial'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('process');
        }
    }
    public function update(Request $request,$slug){
        $update = process::where('slug',$slug)->update([
            'icon' => $_POST['icon'],
            'name' => $_POST['name'],
            'description' => $_POST['description'],
            'serial' => $_POST['serial'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success','value');
            return redirect()->route('process');
        }
    }

    public function delete(Request $request,$slug){
        $delete = process::where('slug',$slug)->delete();
        if($delete){
            Session::flash('success','value');
            return redirect()->route('process');
        }
      //return view('delete');
    }
}
