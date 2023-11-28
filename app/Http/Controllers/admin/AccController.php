<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\fe\RegisterPostRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('role',1)->get();
        return view('admin.user_admin.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user_admin.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterPostRequest $req)
    {
        if($req->password != $req->Rpassword){
            return redirect()->back()->with('error','Mật khẩu không trùng nhau');
        };
        $role = 1;
        $req->merge(['password'=>Hash::make($req->password)]);
        $req->merge(['role'=>$role]);
        try {
            $dataUser = User::create($req->all());
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect()->route('account.index')->with('success','Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
