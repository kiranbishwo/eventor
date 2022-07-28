<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Session;
use App\Models\User;

class FrontUserController extends Controller
{
    public function userprofile(){
        $data= array();
        if(Session::has('userLoginId')){
            $data = User::where('id',Session::get('userLoginId'))->first();
            session(['name' => $data->name]);
            session(['email' => $data->email]);
            return view('frontend.user-profile', ['data'=>$data]);

        }else{
            return view('frontend.user-profile');
        }
    }

    public function userupdate(){
        return view('frontend.update-profile', ['mode'=>'user']);
    }
    public function userchangepassword(){
        return view('frontend.change-password',['mode'=>'user']);
    }
    
}
