<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use Carbon\Carbon;
use Image;
use Session;


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

}
