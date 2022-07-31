<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Package;
use App\Models\Subpackage;
use App\Models\Invoice;
use Session;
use DB;
 
class BookingController extends Controller
{
    public function index(){
        $invoice = Invoice::join('packages', 'packages.id', '=', 'invoices.package_id')
        ->join('users', 'invoices.user_id', '=', 'users.id')
        ->get(['invoices.*', 'packages.name','users.name as user_name' ]);

        // dd($invoice);
        return view('backend.booking', ['invoice'=>$invoice,]);


    }

    public function bookingDetails($id){
            $invoice = Invoice::join('packages', 'packages.id', '=', 'invoices.package_id')
            ->where('invoices.id', $id)
            ->get(['invoices.*', 'packages.name','packages.price','packages.category', 'packages.service']);
            // dd($invoice);
            $subpackage = Subpackage::All();

            return view('backend.bookingDetails', ['invoice'=>$invoice, 'subpackage'=>$subpackage]);
    }
    public function editBooking($id){
        $invoice = Invoice::find($id);
        // dd($invoice);
        return view('backend.editBooking',['invoice'=>$invoice]);
    }
    
    public function updateBooking(Request $req){
        if($req->ajax()){
            $invoice = Invoice::where('id',$req->input('id'))
            ->update([
                'status' => $req->input('status')
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Category Updated Successfully',
            ]);
        }
    }
}
