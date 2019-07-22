<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\myresume;

class resumeController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(Request $request){
      return view('admin.resume.index');
    }

}
