<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use DB;

class FrontPackageController extends Controller
{
    public function index(){
        // return view('frontend.package');
        $package = Package::All();
        return view('frontend.package', ['package'=>$package]);
    }
    public function packagedetail($id){
        
        $package = Package::find($id);
        return view('frontend.package-detail',['package'=>$package]);
    }
    public function showpackage($cat_name){
        
        $package = DB::table('packages')->where('category', $cat_name)->get();
        return view('frontend.package', ['package'=>$package]);
        
        
    }
}
