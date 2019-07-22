<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\partners;
use Carbon\ Carbon;
use Image;
use Session;
use Auth;
use Storage;

class partnerController extends Controller
{
    public function index(Request $request){
        $item = partners::get();
        return view('admin.partner.index',compact('item'));
      //return view('index');
    }

    public function add(Request $request){
        $slug = 'slug'.uniqid(20);
        $insert = partners::insert([
            'image' => '',
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('image')){
            $file=$request->file('image');
            $path=Storage::putFile('uploads/partner',$file);
            partners::where('slug',$slug)->update([
                'image'=>$path
            ]);
        }

        if($insert){
            Session::flash('success','value');
            return redirect()->route('partner');
        }
    }

    public function delete(Request $request,$slug){
        $delete=partners::where('slug',$slug)->firstOrFail();
        Storage::disk('public')->delete($delete->image);

        $delete = partners::where('slug',$slug)->delete();
        if($delete){
            Session::flash('success','value');
            return redirect()->route('partner');
        }
      //return view('delete');
    }
}
