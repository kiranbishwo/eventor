<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Category;
use Response;

class CategoryController extends Controller
{
    public function index(){
        // $data['category'] = Category::get();
        // return view('backend.category',$data);
        return view('backend.category');
    }

    public function loadtable(){
        $category = Category::all();
        return response()->json([
            'category'=> $category,
        ]);
        
    }


    public function store(Request $req){
        if($req->ajax()){
            $photo = Category::create([
                'name' => $req->input('name'),
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Category Added Successfully',
                'data' => $photo
            ]);
        }
       
    }

    public function edit($id){
        $category =  Category::find($id);
        // dd($student);
        if($category){
            return response()->json([
                'status' => 200,
                'message' => $category,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Category Doesnt Exist',
            ]);
        }
       
    }

    public function update(Request $req){
        if($req->ajax()){
            $category = Category::where('id',$req->input('edit_id'))
            ->update([
                'name' => $req->input('edit_name')
            ]);
            return Response()->json([
                'status' => 200,
                'message' => 'Category Updated Successfully',
            ]);
        }
    }

    public function delete($id){
        $category =  Category::find($id);
        // dd($student);
        if($category){
            return response()->json([
                'status' => 200,
                'message' => $category,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Category Doesnt Exist',
            ]);
        }
    }

    public function destroy(Request $req){
        if($req->ajax()){
            $category = Category::destroy($req->id);
            return Response()->json([
                'status' => 200,
                'message' => 'Category Deleted Successfully',
            ]);
        }
    }
}
