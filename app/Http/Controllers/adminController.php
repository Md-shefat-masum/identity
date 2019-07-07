<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;
use auth;
use Carbon\Carbon;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view(){
        return view('admin.index');
    }
}
