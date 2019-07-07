<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\banner;
use Carbon\Carbon;
use Image;
use session;


class bannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $select=banner::where('status',1)->get();
     	return view('admin.banner.index',compact('select'));
    }

    public function add()
    {
     	return view('admin.banner.add');
    }

    public function addbanner(Request $request)
    {
         $slug = 'banner'.uniqid(20);

         $insert=banner::insert([
            'name'=>'',
            'subtitle'=>$_POST['subtitle'],
            'title'=>$_POST['title'],
            'slug'=>$slug
         ]);

         if($request->hasFile('name')){
            $image=$request->file('name');
            $ImageName='banner'.'_'.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$ImageName);
            banner::where('slug',$slug)->update([
                'name'=>$ImageName
            ]);
        }

        if($insert){
            return redirect()->route('frontend_banner');
        }


    }

    public function update(Request $request,$slug)
    {
        $item=banner::where('slug',$slug)->firstOrFail();
     	return view('admin.banner.update',compact('item'));
    }

    public function update_banner(Request $request,$slug){
        $update=banner::where('slug',$slug)->update([
            'title' => $_POST['title'],
            'subtitle' => $_POST['subtitle'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('name')){
            $image=$request->file('name');
            $ImageName='banner'.'_'.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/'.$ImageName);
            banner::where('slug',$slug)->update([
                'name'=>$ImageName
            ]);
        }

        if($update){
            return redirect()->route('frontend_banner');
        }
    }

    git config --global user.name 'Md-shefat-masum'
    git config --global user.email 'myphoto240@gmail.com'
    git add .  (this command all all files)
    git branch new-branch-name ( add new branch to git hub )
    git checkout branch-name ( changing the git branch )
    git commit -m 'commit message' ( commit file with a message )
    git merge new-mergename ( then click 'i' and write 'Added baranch-name' )
    git remote add origin https://github.com/Md-shefat-masum/identity.git ( add git hub repository to file )
    git remote
    git push -u origin master
    git push -f origin master

}
