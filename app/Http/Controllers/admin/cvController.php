<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use Carbon\Carbon;
use Image;
use App\biodata;
use Storage;

class cvController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $cv=biodata::where('id',1)->firstOrFail();
        return view('admin.biodata.index',compact('cv'));
    }

    public function update(Request $request,$slug){
        $update=biodata::where('slug',$slug)->update([
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        $delete=biodata::where('slug',$slug)->select('file')->firstOrFail();
        Storage::disk('public')->delete($delete->file);

        if($request->hasFile('file')){
            $file=$request->file('file');
            $path=Storage::putFile('uploads/cv',$file);
            biodata::where('slug',$slug)->update([
                'file'=>$path
            ]);
        }

        if($update){
            Session::flash('success','value');
            return redirect()->route('bio_data');
        }

    }
}

