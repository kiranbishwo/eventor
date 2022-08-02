<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Setting;
use DB;
 
class FrontHomeController extends Controller
{
    
    public function home(){
        $blog = DB::table('blogs')->take(3)->get();
        $package = DB::table('packages')->take(3)->get();
        return view('frontend.index', ['package'=>$package,'blog'=>$blog]);
        
    }
    public function aboutus(){
        return view('frontend.about');
    }
    public function contactus(){
        $setting = Setting::all();
        return view('frontend.contact', ['setting'=>$setting]);
    }
    public function gallery(){
        $gallery = Gallery::all();
        
        return view('frontend.gallery',['gallery'=> $gallery]);
    }
    public function blogs(){
        $blog = DB::table('blogs')->take(5)->get();
        $blogs = DB::table('blogs')->get();
        return view('frontend.blog', ['blog'=>$blog,'blogs'=>$blogs]);
    }
    public function blogdetail($id){
        $blog = Blog::find($id);
        $blogs = DB::table('blogs')->take(5)->get();

        return view('frontend.blog-detail',['blog'=>$blog, 'blogs'=>$blogs]);
    }
   
    public function userregister(){
        return view('frontend.user-signup');
    }

    

}
