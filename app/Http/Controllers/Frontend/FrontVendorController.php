<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use Session;

class FrontVendorController extends Controller
{
    public function vendorlogin(){
        return view('frontend.vendor-login');
    }
    public function vendorprofile(){
        $data= array();
        if(Session::has('vendorLoginId')){
            $data = Vendor::where('id',Session::get('vendorLoginId'))->first();
            session(['vendorName' => $data->name]);
            session(['vendorEmail' => $data->email]);
            session(['vendorCat' => $data->category]);
            return view('frontend.vendor-profile', ['data'=>$data]);

        }else{
            return view('frontend.vendor-login');
        }

    }


    public function vendorupdate(){
        $data = Vendor::where('id',Session::get('vendorLoginId'))->first();
        return view('frontend.update-profile', ['mode'=>'vendor','data'=>$data]);
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
