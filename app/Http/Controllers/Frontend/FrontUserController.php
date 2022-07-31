<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Subpackage;

class FrontUserController extends Controller
{
    public function userprofile(){
        $data= array();
        if(Session::has('userLoginId')){
            $data = User::where('id',Session::get('userLoginId'))->first();
            session(['name' => $data->name]);
            session(['email' => $data->email]);
            
            // $invoice = Invoice::where('user_id',Session::get('userLoginId'))->get();
            $invoice = Invoice::join('packages', 'packages.id', '=', 'invoices.package_id')
            ->where('user_id', Session::get('userLoginId'))
            ->get(['invoices.*', 'packages.name']);

            return view('frontend.user-profile', ['data'=>$data,'invoice'=>$invoice]);

        }else{
            return view('frontend.user-login');
        }
    }
    public function userInvloiceDetail($id){
        
            
            // $invoice = Invoice::where('user_id',Session::get('userLoginId'))->get();
            $invoice = Invoice::join('packages', 'packages.id', '=', 'invoices.package_id')
            ->where('invoices.id', $id)
            ->get(['invoices.*', 'packages.name','packages.price','packages.category', 'packages.service']);
            // dd($invoice);
            $subpackage = Subpackage::All();
            // dd($subpackage);

            return view('frontend.userinvoice-detail', ['invoice'=>$invoice, 'subpackage'=>$subpackage]);

    }

    public function userupdate(){
        $data = User::where('id',Session::get('userLoginId'))->first();
        return view('frontend.update-profile', ['mode'=>'user','data'=>$data]);
    }
    public function userchangepassword(){
        return view('frontend.change-password',['mode'=>'user']);
    }

    public function updateprofile(Request $req){
        $req->validate([
            'name'=>'required',
            'address'=>'required',
            'contact'=>'required',
        ]);

        if($req->ajax()){
            $user = User::where('id',$req->input('id'))
            ->update([
                'name' => $req->input('name'),
                'contact' => $req->input('contact'),
                'address' => $req->input('address'),
            ]);
            session(['name' => $req->name]);
            return Response()->json([
                'status' => 200,
                'message' => 'User Updated Successfully',
            ]);
        }
    }
    public function passwordchange(Request $req){
        $req->validate([
            'password' => 'min:6|required',
            'new_password' => 'min:6|required_with:re_password|same:re_password',
            're_password' => 'min:6|required',
        ]);

        if($req->ajax()){
            
            $find = User::where('id',$req->input('id'))->first();
            if(Hash::check($req->input('password'), $find->password)){
                $user = User::where('id',$req->input('id'))
                ->update([
                    'password' => Hash::make($req->input('re_password')),
                ]);
                
            }else{
                return redirect()->back()->with('error','Password Not Matched.');
            }

            return Response()->json([
                'status' => 200,
                'message' => 'User Updated Successfully',
            ]);
        }
    }    
}
