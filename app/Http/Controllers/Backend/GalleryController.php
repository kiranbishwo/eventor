<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\File; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Gallery;
use Response;

class GalleryController extends Controller
{
    public function index(){
        return view('backend.gallery');
    }
    public function loadtable(){
        $gallery = Gallery::all();
        return response()->json([
            'gallery'=> $gallery,
        ]);
        
    }
    // store 
    public function store(Request $req){
        $req->validate([
            'photo'=>'required|mimes:jpg,png,jpg|max:5048',
        ]);

        $test=$req->file('photo')->guessExtension();//get extention
        $type=$req->file('photo')->getMimeType();//get type

        $newImageName = time().'.'.$req->photo->extension();
        $result=  $req->photo->move(public_path('images'),$newImageName);


        if($req->ajax()){
            $gallery = Gallery::create([
                'photo' => $newImageName,
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Photo Added Successfully.',
            ]);
        }
       
    }
        // delete
        public function delete($id){
            $gallery =  Gallery::find($id);
            // dd($student);
            if($gallery){
                return response()->json([
                    'status' => 200,
                    'message' => $gallery,
                ]);
            }else{
                return response()->json([
                    'status' => 404,
                    'message' => 'Photo Doesnt Exist',
                ]);
            }
        }
    
        // destroy
        public function destroy(Request $req){
            if($req->ajax()){
    
                // delete file if exist
                $grab_data = Gallery::find($req->id);//grab data
                $old_img = $grab_data->photo;
                
                if(File::exists(public_path('images/'.$old_img))){
                    File::delete(public_path('images/'.$old_img));
                }else{
                    dd('File does not exists.');
                }
                // end delete file
                
    
                $gallery = Gallery::destroy($req->id);
                return Response()->json([
                    'status' => 200,
                    'message' => 'Photo Deleted Successfully',
                ]);
            }
        }
}
