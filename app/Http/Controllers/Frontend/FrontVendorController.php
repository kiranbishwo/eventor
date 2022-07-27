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
        return view('frontend.update-profile');
    }
    public function vendorinvoice(){
        return view('frontend.invoice');
    }
    public function changepassword(){
        return view('frontend.change-password');
    }
    public function mypackages(){
        return view('frontend.mypackages');
    }
    public function addnewpackage(){
        return view('frontend.addnew-package');
    }
}
