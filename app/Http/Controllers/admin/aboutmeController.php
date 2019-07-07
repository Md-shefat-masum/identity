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
    }

    public function update(Request $request,$slug){

      $update=aboutme::where('slug',$slug)->update([
        'heading' => $_POST['heading'],
        'sub_heading' => $_POST['sub_heading'],
        'paragraph' => $_POST['paragraph'],
        'name' => $_POST['name'],
        'occupation' => $_POST['occupation'],
        'birthdate' => $_POST['birthdate'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'website' => $_POST['website'],
        'address' => $_POST['address'],
        'happy_client' => $_POST['happy_client'],
        'experience' => $_POST['experience'],
        'award' => $_POST['award'],
        'project_done' => $_POST['project_done'],
        'updated_at' => Carbon::now()->toDateTimeString()
      ]);

      if($request -> hasFile('file')){
            $image = $request->file('file');
            $ImageName = 'aboutme'.'_'.$slug.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$ImageName);
            aboutme::where('slug',$slug)->update([
            'image' => $ImageName
            ]);
        }

        if($update){
            Session::flash('success','value');
            return redirect()->route('frontend_aboutme');
        }
    }

}
