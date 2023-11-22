<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()&&Auth::user()) {
            redirect()->route('login')->with('err','Your account is incorrect');
        }elseif (Auth::check()&&Auth::user()->status == 0){
            Auth::guard('web')->logout();
            redirect()->route('login')->with('err','Tài khoản của bạn chưa kích hoạt');
        }
        return $next($request);
    }
}
