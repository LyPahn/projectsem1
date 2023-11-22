<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\fe\RegisterPostRequest;
use App\Http\Requests\fe\LoginPostRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
        $req->merge(['token'=>strtoupper(Str::random(20))]);
        try {
            $dataUser = User::create($req->all());
            Mail::send('emails.actived_account', compact('dataUser'), function ($message) use ($dataUser) {              
                $message->to($dataUser->email, $dataUser->name);              
                $message->subject('MyBooking - Xác thực tài khoản');
            });
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect()->route('login')->with('success','Mời bạn gmail kích hoạt tài khoản hoàn chỉnh để đăng nhập');
        
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
    public function actived(User $dataUser,$token) {
        if ($dataUser->token === $token) {
            $dataUser->update(['status'=>1]);
            return redirect()->route('login')->with('success','Kích hoath tài khoản thành công,bạn có thể đăng nhập');
        }else{
            redirect()->route('login')->with('err','Mã xác thực không hợp lệ');
        }
    }
}
