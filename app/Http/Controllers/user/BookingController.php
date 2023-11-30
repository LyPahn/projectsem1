<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\bookings;
use App\Models\rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class BookingController extends Controller
{
    public function index($id){
        if(Auth::user() == ''){
            return view('user.login');
        }
        $room = rooms::find($id); 
        return view('user.booking',compact('room'));
    }

    public function store(request $request){
        try {
            bookings::create($request->all());
            return redirect()->route('user.thankyou');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Đặt phòng thất bại');
        }
    }
}
