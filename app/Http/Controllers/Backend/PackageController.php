<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use Exception;
use App\Models\Category;
use App\Models\Vendor;
use App\Models\Package;
use Response;
use DB;

class PackageController extends Controller
{
    public function index(){
        return view('backend.package');
    } 
    // loadtable
    public function loadtable(){
        $package = Package::all();
        return response()->json([
            'package'=> $package,
        ]);
    }

    // delete
    public function delete($id){
        $package =  Package::find($id);
        // dd($student);
        if($package){
            return response()->json([
                'status' => 200,
                'message' => $package,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Package Doesnt Exist',
            ]);
        }
    }

    // destroy
    public function destroy(Request $req){
        if($req->ajax()){

            // delete file if exist
            $grab_data = Package::find($req->id);//grab data
            $old_img = $grab_data->photo;
            
            if(File::exists(public_path('images/'.$old_img))){
                File::delete(public_path('images/'.$old_img));
            }else{
                dd('File does not exists.');
            }
            // end delete file
            

            $package = Package::destroy($req->id);
            return Response()->json([
                'status' => 200,
                'message' => 'Package Deleted Successfully',
            ]);
        }
    }

    // sebd data to add page
    public function addNewPackage(){
        $category = Category::All();
        $vendor = DB::table('vendors')->select('service')->groupBy('service')->get();
        return view('backend.addNewPackage', ['category'=>$category ,'vendor'=>$vendor]);
    }
    // store 
    public function store(Request $req){
        $req->validate([
            'name'=>'required',
            'category'=>'required',
            'price'=>'required',
            'service'=>'required',
            'content'=>'required',
            'addedby'=>'required',
            'days'=>'required',
            'status'=>'required',
            'photo'=>'required|mimes:jpg,png,jpg|max:5048',
        ]);

        $test=$req->file('photo')->guessExtension();//get extention
        $type=$req->file('photo')->getMimeType();//get type

        $newImageName = time().'.'.$req->photo->extension();
        $result=  $req->photo->move(public_path('images'),$newImageName);


        if($req->ajax()){
            $package = Package::create([
                'name' => $req->input('name'),
                'category' => $req->input('category'),
                'price' => $req->input('price'),
                'service' => $req->input('service'),
                'content' => $req->input('content'),
                'addedby' => $req->input('addedby'),
                'days' => $req->input('days'),
                'status' => $req->input('status'),
                'photo' => $newImageName
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Package Added Successfully.',
            ]);
        }
       
    }

    // edit
    public function edit($id){
        $package = Package::Find($id);
        // dd($package);
        $category = Category::All();
        $vendor = DB::table('vendors')->select('service')->groupBy('service')->get();
        $SelectedService =  $package->service;
        // dd($SelectedService);
        return view('backend.updatePackage', ['category'=>$category ,'vendor'=>$vendor, 'package'=>$package, 'service'=>$SelectedService]);
       
    }
    // update
    public function update(Request $req){
        if($req->ajax()){
            $req->validate([
                'name'=>'required',
                'category'=>'required',
                'price'=>'required',
                'service'=>'required',
                'content'=>'required',
                'days'=>'required',
                'addedby'=>'required',
                'status'=>'required',
            ]);
            $edit_id = $req->input('edit_id');
            // if file exist
            if($req->file('photo')!=null){

                // delete file if exist
                $grab_data = Package::find($edit_id);//grab data
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

                $package = Package::where('id',$req->input('edit_id'))
                ->update([
                    'name' => $req->input('name'),
                    'category' => $req->input('category'),
                    'price' => $req->input('price'),
                    'service' => $req->input('service'),
                    'content' => $req->input('content'),
                    'addedby' => $req->input('addedby'),
                    'days' => $req->input('days'),
                    'status' => $req->input('status'),
                    'photo' => $newImageName
                ]);
                return Response()->json([
                    'status' => 200,
                    'message' => 'Package Updated Successfully',
                ]);
            }else{
                $package = Package::where('id',$req->input('edit_id'))
                ->update([
                    'name' => $req->input('name'),
                    'category' => $req->input('category'),
                    'price' => $req->input('price'),
                    'service' => $req->input('service'),
                    'content' => $req->input('content'),
                    'days' => $req->input('days'),
                    'addedby' => $req->input('addedby'),
                    'status' => $req->input('status'),
                ]);
                return Response()->json([
                    'status' => 200,
                    'message' => 'Package Updated Successfully',
                ]);
            }   
        }
    }
}
