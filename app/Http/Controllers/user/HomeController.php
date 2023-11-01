<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\rooms;
use App\Models\tab;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $tab = tab::where('status',0)->get();
        $blog = Blog::where('status',0)->get();
        return view('user.index',compact('blog','tab'));
    }

    public function listRoom(){
        $room = rooms::paginate(12);
        return view('user.list-rooms',compact('room'));
    }

    public function roomDetail(){
        return view('user.room-detail');
    }
}
