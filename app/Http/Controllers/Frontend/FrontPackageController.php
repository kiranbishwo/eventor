<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontPackageController extends Controller
{
    public function index(){
        return view('frontend.package');
    }
    public function packagedetail(){
        return view('frontend.package-detail');
    }
}
