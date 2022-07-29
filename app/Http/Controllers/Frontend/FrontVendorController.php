<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Package;
use App\Models\Subpackage;
use Session;
use DB;

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
            session(['service' => $data->service]);
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

     // loadtable
    public function loadtable(){
        $package = Subpackage::All();
        return response()->json([
            'package'=> $package,
        ]);
        
    }
    public function delete($id){
        $subpackage =  Subpackage::find($id);
        // dd($student);
        if($subpackage){
            return response()->json([
                'status' => 200,
                'message' => $subpackage,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Subpackage Doesnt Exist',
            ]);
        }
    }

    public function destroy(Request $req){
        if($req->ajax()){
            $subpackage = Subpackage::destroy($req->id);
            return Response()->json([
                'status' => 200,
                'message' => 'Subpackage Deleted Successfully',
            ]);
        }
    }
    public function addnewpackage(){
        $service = Session::get('service');
        // dd($service);
        $package = Package::where('service', 'LIKE', "%{$service}%")->get();
        
        return view('frontend.addnew-package',['package'=>$package]);
    }

    public function edit($id){
        $service = Session::get('service');
        // dd($service);
        $package = Package::where('service', 'LIKE', "%{$service}%")->get();
        $subpackage = Subpackage::Find($id);
        return view('frontend.update-package', ['subpackage'=>$subpackage, 'package'=>$package]);
       
    }

    public function addnewVendorpackage(Request $req){
        $req->validate([
            'name'=>'required',
            'package'=>'required',
            'price'=>'required',
            'status'=>'required',
            'content'=>'required',
        ]);
        if($req->ajax()){
            $Subpackage = Subpackage::create([
                'name' => $req->input('name'),
                'package' => $req->input('package'),
                'price' => $req->input('price'),
                'status' => $req->input('status'),
                'content' => $req->input('content'),
                'addedBy' => $req->input('addedBy'),
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Package Created Successfully.',
            ]);
        }
    }
    public function updateVendorpackage(Request $req){
        $req->validate([
            'name'=>'required',
            'package'=>'required',
            'price'=>'required',
            'status'=>'required',
            'content'=>'required',
        ]);
        if($req->ajax()){
            $Subpackage = Subpackage::where('id',$req->input('id'))
            ->update([
                'name' => $req->input('name'),
                'package' => $req->input('package'),
                'price' => $req->input('price'),
                'status' => $req->input('status'),
                'content' => $req->input('content'),
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Package Updated Successfully.',
            ]);
        }
    }

}
