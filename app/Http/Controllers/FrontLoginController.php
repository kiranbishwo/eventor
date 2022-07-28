<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Exception;
use Session;
use App\Models\User;
use App\Models\Vendor;
use Response;

class FrontLoginController extends Controller
{
    // register 
    public function registeruser(Request $req){
        // dd($req);
        $req->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'contact'=>'required',
            'address'=>'required',
        ]);

        if($req->ajax()){
            $user = User::create([
                'name' => $req->input('name'),
                'email' => $req->input('email'),
                'password' => Hash::make($req->input('password')),
                'contact' => $req->input('contact'),
                'address' => $req->input('address'),
            ]);

            return Response()->json([
                'status' => 200,
                'message' => 'Account Resistered Successfully',
            ]);
        }
       
    }

    public function userlogin(){
        return view('frontend.user-login');
    }

    // login
    public function loginuser(Request $req){
        // dd($req);
        $req->validate([
            'email'=>'required|email',
            'password' => 'min:6|required',
        ]);

        $find = User::where('email',$req->input('email'))->first();
        if($find){
            if(Hash::check($req->password, $find->password)){
                $req->session()->put('userLoginId',$find->id);
                return redirect('/user-profile/');
                
            }else{
                return redirect()->back()->with('error','Password Not Matched.');
            }
        }else{
            return redirect()->back()->with('error','Email not Registered.');
        }
       
    }
    public function logout(){
        Session::flush();
        return redirect('/user-login');
    }
    public function vendorLogout(){
        Session::flush();
        return redirect('/vendor-login');
    }
    // login
    public function loginvendor(Request $req){
        // dd($req);
        $req->validate([
            'email'=>'required|email',
            'password' => 'min:6|required',
        ]);

        $find = Vendor::where('email',$req->input('email'))->first();
        if($find){
            if(Hash::check($req->password, $find->password)){
                $req->session()->put('vendorLoginId',$find->id);
                return redirect('/vendor-profile/');
                
            }else{
                return redirect()->back()->with('error','Password Not Matched.');
            }
        }else{
            return redirect()->back()->with('error','Email not Registered.');
        }
       
    }

}
