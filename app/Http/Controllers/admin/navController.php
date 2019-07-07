<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\frontnavs;
use Carbon\Carbon;
use Image;
use Session;


class navController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $select=frontnavs::get();
     	return view('admin.navbar.index',compact('select'));
    }

    public function update(Request $request,$slug){
        $update=frontnavs::where('slug',$slug)->update([
            'name'=> strtolower($_POST['name']),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($update){
            return redirect()->route('frontend_nav');
        }
    }

}
