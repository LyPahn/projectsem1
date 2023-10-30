<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logon() {
        
        return view('admin.logon');
    }
    public function logonstore(Request $req) {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password,'role'=>1])) {
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with('err','Sai tài khoản hoặc mật khẩu');
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('logon');
    }
}
