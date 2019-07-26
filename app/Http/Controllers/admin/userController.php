<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use App\user_role;
use Carbon\Carbon;
use DB;
use Image;
use Session;
use Storage;
use Hash;


class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $all=user::get();
        return view('admin.user.all',compact('all'));
    }

    public function add(Request $request){
        $slug = 'slug'.uniqid(20);
        $insert = user::insert([
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'role_serial' => $_POST['user_role'],
            'password' => Hash::make($_POST['password']),
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('photo')){
            $file=$request->file('photo');
            $path=Storage::putFile('uploads/users',$file);
            user::where('slug',$slug)->update([
                'photo'=>$path
            ]);
        }

        if($insert){
            Session::flash('success','value');
            return redirect()->route('user_index');
        }
    }

}
