<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\blog\BlogStoreRequest;
use App\Http\Requests\blog\BlogUpdateRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogStoreRequest $request)
    {
        try {
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images/',$fileName);
            $request->merge(['image' => $fileName]);
            Blog::create($request->all());
            return redirect()->route('blog.index')->with('success','Thêm mới thành công');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->route('error','Thêm mới thất bại');
        }
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
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        try {
            $fileName = '';
            if ($request->photo == '') {
                $fileName = $blog->image;
            }else{
                $fileName = $request->photo->getClientOriginalName();
                $request->photo->storeAs('public/images/',$fileName);
            }
            
            $request->merge(['image' => $fileName]);
            $blog->update($request->all());
            return redirect()->route('blog.index')->with('success','Cập nhật thành công');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::where('id',$id)->delete();
        return redirect()->route('blog.index')->with('success','Xoá thành công');
    }
}
