<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\frontlogo;
use Carbon\Carbon;
use Image;
use session;


class logoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $item=frontlogo::where('id',1)->firstOrFail();
     	return view('admin.logo.view',compact('item'));
    }

    public function update(Request $request,$slug){
        $update=frontlogo::where('slug',$request['slug'])->update([
            'title' => $_POST['title'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('name')){
            $image=$request->file('name');
            $ImageName='front-logo'.'_'.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$ImageName);
            frontlogo::where('slug',$slug)->update([
                'name'=>$ImageName
            ]);
        }

        if($update){
            return redirect()->route('frontend_logo');
        }
    }

}
