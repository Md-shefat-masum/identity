<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use App\user_role;
use Carbon\Carbon;
use Image;
use Session;
use Storage;


class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all=user::all();
        return view('admin.user.all',compact('all'));
    }

    public function add(Request $request){
        $slug = 'slug'.uniqid(20);
        $insert = user::insert([
            
        ]);
    }

}
