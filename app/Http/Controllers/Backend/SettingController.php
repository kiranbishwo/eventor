<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view('backend.setting');
    }
    public function editSetting(){
        return view('backend.editSetting');
    }
}
