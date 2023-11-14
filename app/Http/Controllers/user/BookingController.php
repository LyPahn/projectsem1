<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\bookings;
use App\Models\rooms;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class BookingController extends Controller
{
    public function index($id){
        $room = rooms::find($id);   
        return view('user.booking',compact('room'));
    }

    public function store(request $request){
        try {
            bookings::create($request->all());
            return redirect()->route('user.listRoom')->with('success','Cảm ơn bạn đã đặt phòng');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Đặt phòng thất bại');
        }
    }
}
