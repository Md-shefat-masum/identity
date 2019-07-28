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
use App\service;
use App\portfoliocategory;
use App\portfolioimage;
use App\personalskill;
use App\languageskill;
use App\biodata;
use App\resumeCategory;
use App\myresume;
use App\clientsay;
use App\partners;
use App\process;
use App\personalinfo;
use App\footer;

class websiteController extends Controller
{
    public function __construct()
    {
    }

    public function index(){
        $logo=frontlogo::where('id',1)->firstOrFail();
        $nav=frontnavs::get();
        $banner=banner::where('status',1)->get();
        $aboutme=aboutme::where('id',1)->firstOrFail();
        $service=service::where('status',1)->get();
        $portcategory=portfoliocategory::where('status',1)->orderBy('name','asc')->get();
        $portimage=portfolioimage::where('status',1)->orderBy('id','desc')->get();
        $skill=personalskill::where('status',1)->get();
        $lskill=languageskill::where('status',1)->get();
        $cv=biodata::select('file')->where('id',1)->firstOrFail();$cv=$cv->file;
        $myresume=myresume::get();
        $resumecat=resumeCategory::orderBy('serial','ASC')->get();
        $client = clientsay::get();
        $partner = partners::get();
        $process = process::orderBy('serial','ASC')->get();
        $social = personalinfo::get();
        $footer = footer::where('id',1)->firstOrFail();

        return view('website.index',compact('footer','social','process','partner','client','logo','nav','banner','aboutme','service','portcategory','portimage','skill','lskill','cv','myresume','resumecat'));
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
