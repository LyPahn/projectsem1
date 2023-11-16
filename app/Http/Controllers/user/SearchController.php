<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\rooms;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function store(Request $request){
        
        $roomSearch = rooms::where('adluts' , $request->adluts)->orwhere('children', $request->children)->get();
        return view('user.list-rooms', compact('roomSearch'));
    }
}
