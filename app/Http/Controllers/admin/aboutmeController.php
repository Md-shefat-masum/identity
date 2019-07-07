<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\aboutme;
use Carbon\Carbon;
use Image;
use Session;
use Auth;

class aboutmeController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        $select=aboutme::where('id',1)->firstOrFail();
        return view('admin.aboutme.index',compact('select'));
        //return view('',compact(''));
        //return redirect('')->route('');
    }
    /* add info */
    public function addView(){
      //return view('');
      //return view('',compact(''));
      //return redirect('')->route('');
    }
    public function add(){
        $slug = 'donner'.uniqid(20);
        $insert= databaseName::insert([
          '' => $_POST[''],
          'slug' => $slug,
          'created_at' => Carbon::now()->toDateTimeString()
        ]);
        if($insert){
          // return view('website.home');
          return redirect()->route('');
        }
        //return view('');
        //return redirect('')->route('');
    }
      /* update info */
    public function updateView(Request $request,$slug){
        //return view('');
        //return view('',compact(''));
        //return redirect()->route('');
    }

    public function update(Request $request,$slug){
      $update=databaseName::where('slug',$slug)->update([
        '' => $_POST[''],
        'updated_at' => Carbon::now()->toDateTimeString()
      ]);

      if($update){
         return redirect()->route('');
      }
      //return view();
      //return redirect()->route();
    }
    /* delete info*/
    public function softDelete(Request $request,$slug){
      $soft=dbName::where('slug',slug)->update([
          'status'=>0,
          'updated_at' => Carbon::now()->toDateTimeString()
      ]);
      if($soft){
         return redirect()->route('');
       }
      //return view();
      //return redirect()->route();
    }
    public function hardDelete(Request $request,$slug){
      $hard=dbName::where('slug',$slug)->delete();
      if($hard){
         return redirect()->route('');
       }
      //return view();
      //return redirect()->route();
    }
}
