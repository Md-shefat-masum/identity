<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\footer;
use Carbon\Carbon;
use Image;
use Session;
use Auth;

class footerController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(Request $request){
        $select=footer::where('id',1)->firstOrFail();
        return view('admin/footer/index',compact('select'));
    }
    public function update(Request $request,$slug){
        $update = footer::where('slug',$slug)->update([
            'title'=>$_POST['title'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($update){
            Session::flash('success','value');
            return redirect()->route('footer_index');
        }
    }
}
