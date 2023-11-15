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
        $room = rooms::where('status' , 1)->orderBy('created_at' , 'desc')->get()->take(9);
        // $tab = tab::where('status',0)->get();
        $blog = Blog::where('status',0)->orderBy('created_at' , 'desc')->take(3)->get();
        $banner = Banner::where('status',0)->take(3)->get();
        $news = Blog::where('status',0)->take(2)->get();
        return view('user.index',compact('blog','banner','news' ,'room'));
    }

    public function listRoom(){
        $room = rooms::paginate(12);
        $news = Blog::where('status',0)->take(2)->get();
        return view('user.list-rooms',compact('room','news'));
    }

    public function roomDetail($id){
        $news = Blog::where('status',0)->take(2)->get();
        $detail = rooms::find($id);
        $similar = rooms::where('type_id' , $detail->type_id)->take(3)->get();
        $img = images::where('room_id',$id);
        return view('user.room-detail',compact('detail','news','img' , 'similar'));
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
