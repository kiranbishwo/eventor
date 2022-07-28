<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontVendorController extends Controller
{
    public function vendorlogin(){
        return view('frontend.vendor-login');
    }
    public function vendorprofile(){
        return view('frontend.vendor-profile');
    }
    public function vendorupdate(){
        return view('frontend.update-profile',['mode'=>'vendor']);
    }
    public function vendorinvoice(){
        return view('frontend.invoice');
    }
    public function changepassword(){
        return view('frontend.change-password',['mode'=>'vendor']);
    }
    public function mypackages(){
        return view('frontend.mypackages');
    }
    public function addnewpackage(){
        return view('frontend.addnew-package');
    }
}
