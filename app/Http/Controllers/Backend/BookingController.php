<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view('backend.booking');
    }

    public function bookingDetails(){
        return view('backend.bookingDetails');
    }
    public function editBooking(){
        return view('backend.editBooking');
    }
}
