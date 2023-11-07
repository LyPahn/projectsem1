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
        $tab = tab::where('status',0)->get();
        $blog = Blog::where('status',0)->take(3)->get();
        $banner = Banner::where('status',0)->take(3)->get();
        $news = Blog::where('status',0)->take(2)->get();
        return view('user.index',compact('blog','tab','banner','news'));
    }

    public function listRoom(){
        $room = rooms::paginate(6);
        $news = Blog::where('status',0)->take(2)->get();
        return view('user.list-rooms',compact('room','news'));
    }

    public function roomDetail($id){
        $news = Blog::where('status',0)->take(2)->get();
        $detail = rooms::find($id);
        $img = images::where('room_id',$id);
        return view('user.room-detail',compact('detail','news','img'));
    }

}
