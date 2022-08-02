<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Package;
use App\Models\Subpackage;
use App\Models\Invoice;
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
            $invoice = Invoice::All();
            $subpackage = Subpackage::where('addedBy',Session::get('vendorLoginId'))->get();

            // count package
            $sublist = DB::table('subpackages')->where('addedBy',Session::get('vendorLoginId'))->get();
            $count = $sublist->count();
            return view('frontend.vendor-profile', ['data'=>$data,'subpackage'=>$subpackage,'invoice'=>$invoice, 'count'=> $count]);

        }else{
            return view('frontend.vendor-login');
        }

    }


    public function vendorupdate(){
        $data = Vendor::where('id',Session::get('vendorLoginId'))->first();
        return view('frontend.update-profile', ['mode'=>'vendor','data'=>$data]);
    }
    public function vendorinvoice(){

        $subpackage = Subpackage::where('addedBy',Session::get('vendorLoginId'))->get(['subpackages.id as subid']);
        $invoice = Invoice::join('packages', 'packages.id', '=', 'invoices.package_id')
        ->get(['invoices.id as invid','invoices.amount','invoices.status','invoices.pmt_method','invoices.buy_date', 'invoices.subpackage_id as invSubid', 'packages.name']);
        // dd($invoice);
        
        return view('frontend.invoice',['invoice'=>$invoice, 'subpackage'=>$subpackage]);
    }
    // vendor invoice detail
    public function vendorInvloiceDetail($id){
        
            
        // $invoice = Invoice::where('user_id',Session::get('userLoginId'))->get();
        $invoice = Invoice::join('packages', 'packages.id', '=', 'invoices.package_id')
        ->where('invoices.id', $id)
        ->get(['invoices.*', 'packages.name','packages.price','packages.category', 'packages.service']);
        // dd($invoice);
        $subpackage = Subpackage::All();
        // dd($subpackage);

        return view('frontend.userinvoice-detail', ['invoice'=>$invoice, 'subpackage'=>$subpackage, 'mode'=>'vendor']);

}
    public function changepassword(){
        return view('frontend.change-password',['mode'=>'vendor']);
    }
    public function mypackages(){
        return view('frontend.mypackages');
    }

     // loadtable
    public function loadtable(){

        $package = DB::table('subpackages')
        ->join('packages', 'subpackages.package_id', '=', 'packages.id')
        ->where('subpackages.addedBy',Session::get('vendorLoginId'))
        ->get(['subpackages.*', 'packages.name as pname']);
        
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
            'package_id'=>'required',
            'price'=>'required',
            'status'=>'required',
            'content'=>'required',
        ]);
        if($req->ajax()){
            $Subpackage = Subpackage::create([
                'name' => $req->input('name'),
                'package_id' => $req->input('package_id'),
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
                'package_id' => $req->input('package'),
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

    // show vendor info to model
    public function subpackageIfno($id){
        $package = Subpackage::find($id);
        return response()->json([
            'subpackage'=> $package,
        ]);
        
    }

}
