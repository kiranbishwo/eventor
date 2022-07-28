<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use DB;
 
class FrontHomeController extends Controller
{
    
    public function home(){
        $blog = DB::table('blogs')->take(3)->get();
        $package = DB::table('packages')->take(3)->get();
        // return view('frontend.layout.header', ['category'=>$category]);
        return view('frontend.index', ['package'=>$package,'blog'=>$blog]);
        
    }
    public function aboutus(){
        return view('frontend.about');
    }
    public function contactus(){
        return view('frontend.contact');
    }
    public function blogs(){
        $blog = DB::table('blogs')->take(5)->get();
        return view('frontend.blog', ['blog'=>$blog]);
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
