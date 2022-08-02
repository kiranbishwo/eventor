<?php
namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\File; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Exception;
use App\Models\Vendor;
use Response;



class VendorController extends Controller
{
    public function index(){
        return view('backend.vendor');
    }
    public function addnewvendor(){
        return view('backend.addnewvendor');
    }
    // loadtable
    public function loadtable(){
        $vendor = Vendor::all();
        return response()->json([
            'vendor'=> $vendor,
        ]);
    }
    // store 
    public function store(Request $req){
        // dd($req);
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:vendors',
            'service'=>'required',
            'contact'=>'required',
            'status'=>'required',
            'address'=>'required',
            'password'=>'required|min:6',
            'content'=>'required',
            'photo'=>'required|mimes:jpg,png,jpg|max:5048',
        ]);

        $test=$req->file('photo')->guessExtension();//get extention
        $type=$req->file('photo')->getMimeType();//get type

        $newImageName = time().'.'.$req->photo->extension();
        $result=  $req->photo->move(public_path('images'),$newImageName);


        if($req->ajax()){
            $vendor = Vendor::create([
                'name' => $req->input('name'),
                'email' => $req->input('email'),
                'service' => $req->input('service'),
                'contact' => $req->input('contact'),
                'status' => $req->input('status'),
                'address' => $req->input('address'),
                'password' => Hash::make($req->input('password')),
                'content' => $req->input('content'),
                'photo' => $newImageName
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Vendor Added Successfully.',
            ]);
        }
       
    }
    // delete
    public function delete($id){
        $vendor =  Vendor::find($id);
        // dd($student);
        if($vendor){
            return response()->json([
                'status' => 200,
                'message' => $vendor,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Vendor Doesnt Exist',
            ]);
        }
    }

    // destroy
    public function destroy(Request $req){
        if($req->ajax()){

            // delete file if exist
            $grab_data = Vendor::find($req->id);//grab data
            $old_img = $grab_data->photo;
            
            if(File::exists(public_path('images/'.$old_img))){
                File::delete(public_path('images/'.$old_img));
            }else{
                dd('File does not exists.');
            }
            // end delete file
            

            $vendor = Vendor::destroy($req->id);
            return Response()->json([
                'status' => 200,
                'message' => 'Vendor Deleted Successfully',
            ]);
        }
    }
    // edit
    public function edit($id){
        $vendor = Vendor::Find($id);
        return view('backend.updatevendor', ['vendor'=>$vendor]);
       
    }
    // update
    public function update(Request $req){
        if($req->ajax()){
            $req->validate([
                'name'=>'required',
                'service'=>'required',
                'contact'=>'required',
                'status'=>'required',
                'address'=>'required',
                'content'=>'required',
            ]);
            $edit_id = $req->input('edit_id');
            // if file exist
            if($req->file('photo')!=null){

                // delete file if exist
                $grab_data = Vendor::find($edit_id);//grab data
                $old_img = $grab_data->photo;
                
                if(File::exists(public_path('images/'.$old_img))){
                    File::delete(public_path('images/'.$old_img));
                }else{
                    dd('File does not exists.');
                }
                // end delete file




                $test=$req->file('photo')->guessExtension();//get extention
                $type=$req->file('photo')->getMimeType();//get type

                $newImageName = time().'.'.$req->photo->extension();
                $result=  $req->photo->move(public_path('images'),$newImageName);

                $vendor = Vendor::where('id',$req->input('edit_id'))
                ->update([
                    'name' => $req->input('name'),
                    'service' => $req->input('service'),
                    'contact' => $req->input('contact'),
                    'status' => $req->input('status'),
                    'email' => $req->input('email'),
                    'address' => $req->input('address'),
                    'password' => Hash::make($req->input('password')),
                    'content' => $req->input('content'),
                    'photo' => $newImageName
                ]);
                return Response()->json([
                    'status' => 200,
                    'message' => 'Category Updated Successfully',
                ]);
            }else{
                $vendor = Vendor::where('id',$req->input('edit_id'))
                ->update([
                    'name' => $req->input('name'),
                    'service' => $req->input('service'),
                    'contact' => $req->input('contact'),
                    'status' => $req->input('status'),
                    'email' => $req->input('email'),
                    'password' => Hash::make($req->input('password')),
                    'address' => $req->input('address'),
                    'content' => $req->input('content'),
                ]);
                return Response()->json([
                    'status' => 200,
                    'message' => 'Vendor Updated Successfully',
                ]);
            }   
        }
    }
}
