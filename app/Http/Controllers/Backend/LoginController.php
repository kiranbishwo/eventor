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
        return view('auth.login');
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
    }
    public function dashboard(){
        $data= array();
        if(Session::has('loginId')){
            $data = Team::where('id',Session::get('loginId'))->first();
            session(['name' => $data->name]);
            session(['role' => $data->role]);
            session(['photo' => $data->photo]);
            return view('backend.index');

        }else{
            return view('auth.login');
        }
       
       
    }
    public function logout(){
        Session::flush();
        return redirect('/login');
    }
}
