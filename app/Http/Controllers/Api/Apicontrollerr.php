<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\Category;
use Response;

class Apicontrollerr extends Controller
{
    public function store(Request $req){
        try{
            $photo = Category::create([
                'name' => $req->input('name'),
            ]);
            
        }
        catch(\exception $e){
            $returnarr['status'] = 'error';
            $returnarr['message'] = 'Category Added unsuccessfully';

        }
        $returnarr['status'] = 'success';
        $returnarr['message'] = 'Category Added Successfully';
        
       return $returnarr;
    }

    // load category
    public function load(){
        $category = Category::all();
        return $category;
        
    }

}
