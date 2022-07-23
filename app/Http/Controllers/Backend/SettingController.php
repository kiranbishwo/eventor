<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\File; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Setting;
use Response;
use DB;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::all();
        // dd($setting);
        return view('backend.setting', ['setting'=>$setting]);

    }

    public function editSetting($id){
        $setting = Setting::Find($id);
        return view('backend.editSetting', ['setting'=>$setting]);
    }
    // store and update
    public function updatestore(Request $req){
        $setting = Setting::all();
        $req->validate([
            'brand'=>'required',
            'phone'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'metatext'=>'required',
            'metakey'=>'required',
        ]);
        if($req->ajax()){
            if (Setting::exists()) {
                DB::update('update settings set brand = ?,phone=?,mobile=?,email=?,metatext=?,metakey=?',[ $req->input('brand'), $req->input('phone'), $req->input('mobile'), $req->input('email'), $req->input('metatext'),  $req->input('metakey')]);

                return Response()->json([
                    'status' => 200,
                    'message' => 'Setting Updated Successfully.',
                ]);
            }else{
                $setting = Setting::create([
                    'brand' => $req->input('brand'),
                    'phone' => $req->input('phone'),
                    'mobile' => $req->input('mobile'),
                    'email' => $req->input('email'),
                    'metatext' => $req->input('metatext'),
                    'metakey' => $req->input('metakey'),
                ]);
                return Response()->json([
                    'status' => 200,
                    'message' => 'Setting Created Successfully.',
                ]);
            }
            
            
        }


    }
    
}
