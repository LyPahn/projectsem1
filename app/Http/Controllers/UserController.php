<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\fe\RegisterPostRequest;
use App\Http\Requests\fe\LoginPostRequest;

class UserController extends Controller
{
    public function login() {
        return view('user.login');
    }
    public function register() {
        return view('user.register');
    }
    public function registerPost(RegisterPostRequest $req) {
        if($req->password != $req->Rpassword){
            return redirect()->back()->with('error','Mật khẩu không trùng nhau');
        }
        $req->merge(['password'=>Hash::make($req->password)]);
        try {
            User::create($req->all());
            return redirect()->route('login');
        } catch (\Throwable $th) {
            dd($th);
        }
        
    }
    public function loginPost(LoginPostRequest $req) {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->route('user.index');
        }
            return redirect()->back()->with('err','Sai tài khoản hoặc mật khẩu');
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('user.index');
    }
}
