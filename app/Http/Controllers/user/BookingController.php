<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\rooms;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index($id){
        $room = rooms::find($id);   
        return view('user.booking',compact('room'));
    }
}
