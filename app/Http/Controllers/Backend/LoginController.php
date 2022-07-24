<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Team;
use Response;
use Session;

class LoginController extends Controller
{
    public function login(){
        return view('backend.login');
    }
    // login
    public function postLogin(Request $req)
    {
        $req->validate([
            'password'=>'required|max:12|min:5',
            'email'=>'required|email',
        ]);
        $user = Team::where('email',$req->input('email'))->first();
        if($user){
            if(Hash::check($req->password, $user->password)){
                $req->session()->put('loginId',$user->id);
                return redirect('/dashboard');
                
            }else{
                return redirect()->back()->with('error','Password Not Matched.');
            }
        }else{
            // return Response()->json([
            //     'status' => 400,
            //     'message' => 'Email not Registered',
            // ]);
            return redirect()->back()->with('error','Email not Registered.');
        }  
        
        // $credentials = $req->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('dashboard')
        //         ->withSuccess('You have Successfully loggedin');
        // }
  
        // return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    public function dashboard(){
        $data= array();
        if(Session::has('loginId')){
            $data = Team::where('id',Session::get('loginId'))->first();
            return view('backend.index', ['data'=>$data]);
        }else{
            return view('backend.login');
        }
       
       
    }
    public function logout(){
        Session::flush();
        return redirect('/login');
    }
}
