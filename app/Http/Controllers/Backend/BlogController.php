<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\File; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Blog;
use Response;

class BlogController extends Controller
{
    public function index(){
        return view('backend.blog');
    }
    public function addnewblog(){
        return view('backend.addnewblog');
    }

    public function loadtable(){
        $blog = Blog::all();
        return response()->json([
            'blog'=> $blog,
        ]);
        
    }

    public function store(Request $req){
        $test=$req->file('photo')->guessExtension();//get extention
        $type=$req->file('photo')->getMimeType();//get type
        
        $req->validate([
            'title'=>'required',
            'author'=>'required',
            'content'=>'required',
            'photo'=>'required|mimes:jpg,png,jpg|max:5048',
        ]);

        $newImageName = time().'.'.$req->photo->extension();
        $result=  $req->photo->move(public_path('images'),$newImageName);


        if($req->ajax()){
            $blog = Blog::create([
                'title' => $req->input('title'),
                'author' => $req->input('author'),
                'content' => $req->input('content'),
                'photo' => $newImageName
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Blog Added Successfully.',
            ]);
        }
       
    }


    public function delete($id){
        $blog =  Blog::find($id);
        // dd($student);
        if($blog){
            return response()->json([
                'status' => 200,
                'message' => $blog,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Blog Doesnt Exist',
            ]);
        }
    }

    public function destroy(Request $req){
        if($req->ajax()){
            // delete file if exist
            $grab_data = Blog::find($req->id);//grab data
            $old_img = $grab_data->photo;
            
            if(File::exists(public_path('images/'.$old_img))){
                File::delete(public_path('images/'.$old_img));
                /*
                    Delete Multiple File like this way
                    Storage::delete(['upload/test.png', 'upload/test2.png']);
                */
            }else{
                dd('File does not exists.');
            }
            // end delete file


            $blog = Blog::destroy($req->id);
            return Response()->json([
                'status' => 200,
                'message' => 'Blog Deleted Successfully',
            ]);
        }
    }
    
    public function edit($id){
        $blog = Blog::Find($id);
        return view('backend.updateblog', ['blog'=>$blog]);
       
    }
    public function update(Request $req){
        if($req->ajax()){
            $req->validate([
                'title'=>'required',
                'author'=>'required',
                'content'=>'required'
            ]);
            $edit_id = $req->input('edit_id');
            // if file exist
            if($req->file('photo')!=null){
                // delete file if exist
                $grab_data = Blog::find($edit_id);//grab data
                $old_img = $grab_data->photo;
                
                if(File::exists(public_path('images/'.$old_img))){
                    File::delete(public_path('images/'.$old_img));
                    /*
                        Delete Multiple File like this way
                        Storage::delete(['upload/test.png', 'upload/test2.png']);
                    */
                }else{
                    dd('File does not exists.');
                }
                // end delete file

                $test=$req->file('photo')->guessExtension();//get extention
                $type=$req->file('photo')->getMimeType();//get type

                $newImageName = time().'.'.$req->photo->extension();
                $result=  $req->photo->move(public_path('images'),$newImageName);

                $blog = Blog::where('id',$req->input('edit_id'))
                ->update([
                    'title' => $req->input('title'),
                    'author' => $req->input('author'),
                    'content' => $req->input('content'),
                    'photo' => $newImageName
                ]);
                return Response()->json([
                    'status' => 200,
                    'message' => 'Category Updated Successfully',
                ]);
            }else{
                $blog = Blog::where('id',$req->input('edit_id'))
                ->update([
                    'title' => $req->input('title'),
                    'author' => $req->input('author'),
                    'content' => $req->input('content')
                ]);
                return Response()->json([
                    'status' => 200,
                    'message' => 'Blog Updated Successfully',
                ]);
            }   
        }
    }
}
