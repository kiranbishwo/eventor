<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Team;
use App\Models\Package;
use App\Models\Blog;
use App\Models\Invoice;
use App\Models\Vendor;
use App\Models\Subpackage;
use App\Models\User;
use Response;
use Session;
use DB;

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
            $revenue = DB::table('invoices')
            ->sum('amount');
            $count_package = Package::count();
            $count_team = Team::count();
            $count_blog = Blog::count();
            $count_booking = Invoice::count();
            $count_vendor = Vendor::count();
            $count_subpkg = Subpackage::count();
            $count_user = User::count();
            // dd($count_package);
            return view('backend.index', ['count_package'=>$count_package,'count_team'=>$count_team,'count_blog'=>$count_blog,'count_booking'=>$count_booking, 'count_vendor'=>$count_vendor,'count_subpkg'=>$count_subpkg ,'count_user'=>$count_user,'revenue'=>$revenue]);

        }else{
            return view('backend.login');
        }
       
       
    }
    public function userlist(){
        if(Session::has('loginId')){
            $user = User::all();
            return view('backend.userlist',['user'=>$user]);
        }else{
            return view('backend.login');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/dashboard');
    }
}
