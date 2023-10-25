<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\tab;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $tab = tab::where('status',0)->get();
        $blog = Blog::where('status',0)->get();
        return view('user.index',compact('blog','tab'));
    }
}
