<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\images;
use App\Models\rooms;
use App\Models\tab;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $room = rooms::orderBy('created_at' , 'desc')->get()->take(9);
        return view('user.index',compact('room'));
    }

    public function listRoom(){
        $room = rooms::paginate(12);
        return view('user.list-rooms',compact('room'));
    }

    public function roomDetail($id){
        $detail = rooms::find($id);
        $similar = rooms::where('type_id' , $detail->type_id)->take(3)->get();
        $img = images::where('room_id',$id);
        return view('user.room-detail',compact('detail','img' , 'similar'));
    }

    public function about(){
        return view('user.about');
    }
    public function service(){
        return view('user.service');
    }
    public function contact(){
        return view('user.contact');
    }

}
