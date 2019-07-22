<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ partner;
use Carbon\ Carbon;
use Image;
use Session;
use Auth;

class partnerController extends Controller
{
    public function index(Request $request){
        return view()
      //return view('index');
    }
}
