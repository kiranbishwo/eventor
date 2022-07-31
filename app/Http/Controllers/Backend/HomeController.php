<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class HomeController extends Controller
{
    public function index(){
        
        return view('backend.index');
    }
}
