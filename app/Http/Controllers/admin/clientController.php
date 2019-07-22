<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\clientsay;
use Carbon\ Carbon;
use Image;
use Session;
use Auth;

class clientController extends Controller
{
    public function index(Request $request){
        $select = clientsay::get();
        return view('admin.client.index',compact('select'));
    }

    public function add(Request $request){
        $slug = 'slug'.uniqid(20);
        $insert = clientsay::insert([
            'comment' => $_POST['comment'],
            'name' => $_POST['name'],
            'occupation' => $_POST['occupation'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('client');
        }
    }

    public function delete(Request $request,$slug){
        $delete = clientsay::where('slug',$slug)->delete();
        if($delete){
            Session::flash('success','value');
            return redirect()->route('client');
        }
    }
}
