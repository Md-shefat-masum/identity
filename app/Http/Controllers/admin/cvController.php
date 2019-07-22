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
        // dd($delete->file);
        $delete= "'". $delete->file . "'"'";
        dd($delete);
        Storage::disk('public')->delete($delete);

        if($request->hasFile('file')){
            $file=$request->file('file');
            // dd($file);
            $filename=$file->getClientOriginalName();
            // Storage::$file->store('uploads/'.$filename);
            // biodata::where('slug',$slug)->update([
            //     'file'=>$filename
            // ]);
            $path=Storage::putFile('uploads/cv',$file);
            // dd($path);
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

