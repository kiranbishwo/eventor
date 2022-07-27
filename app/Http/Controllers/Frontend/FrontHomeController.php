<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontHomeController extends Controller
{
    public function home(){
        return view('frontend.index');
        
    }
    public function aboutus(){
        return view('frontend.about');
    }
    public function contactus(){
        return view('frontend.contact');
    }
    public function blogs(){
        return view('frontend.blog');
    }
    public function blogdetail(){
        return view('frontend.blog-detail');
    }
    public function userlogin(){
        return view('frontend.user-login');
    }
    public function userregister(){
        return view('frontend.user-signup');
    }

}
