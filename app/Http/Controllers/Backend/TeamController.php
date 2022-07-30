<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Session;
use App\Models\Team;
use Response;
use DB;

class TeamController extends Controller
{
    public function index(){
        return view('backend.team');
    }
    public function addnewteam(){
        return view('backend.addnewteam');
    }

     // loadtable
     public function loadtable(){
        $team = Team::all();
        return response()->json([
            'team'=> $team,
        ]);
        
    }
    // store
    public function store(Request $req){

        $req->validate([
            'name'=>'required',
            'password'=>'required|max:12|min:5',
            'contact'=>'required',
            'role'=>'required',
            'email'=>'required|email|unique:teams',
            'photo'=>'required|mimes:jpg,png,jpg|max:5048',
        ]);

        $test=$req->file('photo')->guessExtension();//get extention
        $type=$req->file('photo')->getMimeType();//get type

        $newImageName = time().'.'.$req->photo->extension();
        $result=  $req->photo->move(public_path('images'),$newImageName);


        if($req->ajax()){
            $team = Team::create([
                'name' => $req->input('name'),
                'password' => Hash::make($req->input('password')),
                'contact' => $req->input('contact'),
                'role' => $req->input('role'),
                'email' => $req->input('email'),
                'photo' => $newImageName
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Team Added Successfully.',
            ]);
        }
       
    }
    // delete
    public function delete($id){
        $team =  Team::find($id);
        // dd($student);
        if($team){
            return response()->json([
                'status' => 200,
                'message' => $team,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Member Doesnt Exist',
            ]);
        }
    }

    public function destroy(Request $req){
        if($req->ajax()){

            // delete file if exist
            $grab_data = Team::find($req->id);//grab data
            $old_img = $grab_data->photo;
            
            if(File::exists(public_path('images/'.$old_img))){
                File::delete(public_path('images/'.$old_img));
            }else{
                dd('File does not exists.');
            }
            // end delete file
            

            $Team = Team::destroy($req->id);
            return Response()->json([
                'status' => 200,
                'message' => 'Member Deleted Successfully',
            ]);
        }
    }

    // edit
    public function edit($id){
        $team = Team::Find($id);
        return view('backend.updateteam', ['team'=>$team]);
    }
    // update
    public function update(Request $req){
        if($req->ajax()){
            $req->validate([
                'name'=>'required',
                'contact'=>'required',
                'role'=>'required',
                'email'=>'required|email',
            ]);
            $edit_id = $req->input('edit_id');
            // if file exist
            if($req->file('photo')!=null){

                // delete file if exist
                $grab_data = Team::find($edit_id);//grab data
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

                $team = Team::where('id',$req->input('edit_id'))
                ->update([
                    'name' => $req->input('name'),
                    'password' => Hash::make($req->input('password')),
                    'contact' => $req->input('contact'),
                    'role' => $req->input('role'),
                    'email' => $req->input('email'),
                    'photo' => $newImageName
                ]);
                if(Session::get('loginId') == $edit_id){
                    session(['photo' => $newImageName]);
                }
                return Response()->json([
                    'status' => 200,
                    'message' => 'Member Updated Successfully',
                ]);
            }else{
                $team = Team::where('id',$req->input('edit_id'))
                ->update([
                    'name' => $req->input('name'),
                    'password' => Hash::make($req->input('password')),
                    'contact' => $req->input('contact'),
                    'role' => $req->input('role'),
                    'email' => $req->input('email')
                ]);
                return Response()->json([
                    'status' => 200,
                    'message' => 'Member Updated Successfully',
                ]);
            }   
        }
    }
}
