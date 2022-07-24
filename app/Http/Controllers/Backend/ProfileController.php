<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Team;
use Response;


class ProfileController extends Controller
{
    public function index($id){
        $team = Team::Find($id);
        return view('backend.profile', ['team'=>$team]);
    }
    public function updateProfile($id){
        $team = Team::Find($id);
        return view('backend.updateProfile', ['team'=>$team]);
    }
    // update
    public function update(Request $req){
        if($req->ajax()){
            $req->validate([
                'name'=>'required',
                'contact'=>'required',
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
                    'contact' => $req->input('contact'),
                    'photo' => $newImageName
                ]);
                if(Session::get('loginId') == $edit_id){
                    session(['photo' => $newImageName]);
                    session(['name' => $req->name]);
                }
                return Response()->json([
                    'status' => 200,
                    'message' => 'Profile Updated Successfully',
                ]);
            }else{
                $team = Team::where('id',$req->input('edit_id'))
                ->update([
                    'name' => $req->input('name'),
                    'contact' => $req->input('contact'),
                ]);
                if(Session::get('loginId') == $edit_id){
                    session(['name' => $req->name]);
                }
                return Response()->json([
                    'status' => 200,
                    'message' => 'Pofile Updated Successfully',
                ]);
            }   
        }
    }
}
