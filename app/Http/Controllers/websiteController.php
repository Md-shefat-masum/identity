<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;
use auth;
use Carbon\Carbon;
use image;
use App\contact_message;
use App\frontlogo;
use App\frontnavs;
use App\banner;
use App\aboutme;

class websiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $logo=frontlogo::where('id',1)->firstOrFail();
        $nav=frontnavs::get();
        $banner=banner::where('status',1)->get();
        $aboutme=aboutme::where('id',1)->firstOrFail();
        return view('website.index',compact('logo','nav','banner','aboutme'));
    }

    // sending message to admin
    public function message(){
        $slug='contact'.uniqid(25);
        $insert=contact_message::insert([
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'message'=>$_POST['message'],
            'slug'=>$slug,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            return redirect()->route('website_index');
        }
    }

}
