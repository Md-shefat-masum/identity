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
use Illuminate\Support\Facades\Auth;
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
            'creator'=>Auth::user()->name,
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

    public function view(Request $request,$slug){
        // $id = $request->id;
        $user = user::where('slug',$slug)->firstOrFail();
        if($user){
            // return response()->json($user);
            return view('admin.user.view',compact('user'));
        }else{
            return response()->json('error');
        }
    }

    public function viewm(Request $request,$slug){
        $select=user::where('slug',$slug)->firstOrFail();
        return response()->json($select);
    }

    public function update(Request $request,$slug){
        $update=user::where('slug',$slug)->update([
            'name'=>$_POST['name'],
            'email'=>$_POST['email'],
            'role'=>$_POST['role'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);
        if($update){
            // Session::flash('success','value');
            return response()->json('success');
        }
    }

}
