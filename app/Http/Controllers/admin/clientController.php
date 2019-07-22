<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\clientsay;
use Carbon\ Carbon;
use Image;
use Session;
use Auth;

class clientController extends Controller
{
    public function index(Request $request){
        return view(amdmin.client.index);
    }
}
