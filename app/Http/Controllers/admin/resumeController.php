<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\myresume;
use Carbon\ Carbon;
use Image;
use Session;
use Auth;
use App\resumeCategory;

class resumeController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(Request $request){
      return view('admin.resume.index');
    }

    public function resumeindex(Request $request){
      return view('admin.resume.resume_category');
    }

    public function addNewCategory(Request $request){
        $slug = 'slug'.uniqid(20);
        $insert = resumeCategory::insert([
            'name' => $_POST['name'],
            'serial' => $_POST['serial'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('resume_category');
        }
      //return view('addNewCategory');
    }

    public function add(Request $request){
        $slug = 'resume'.uniqid(30);

        $insert = myresume::Insert([
            'section_name' => $_POST['section_name'],
            'course_heading' => $_POST['course_heading'],
            'course_sub_heading' => $_POST['course_subheading'],
            'course_details' => $_POST['course_details'],
            'start_date' => $_POST['start_date'],
            'end_date' => $_POST['end_date'],
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            Session::flash('success','value');
            return redirect()->route('resume');
        }
      //return view('add');
    }

}
