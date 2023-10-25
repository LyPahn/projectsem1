<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\tab\TabStoreRequest;
use App\Http\Requests\tab\TabUpdateRequest;
use App\Models\tab;
use Illuminate\Http\Request;

class TabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tab = tab::all();
        return view('admin.tabs.index',compact('tab'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tabs.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TabStoreRequest $request)
    {
        try {
            tab::create($request->all());
            return redirect()->route('tabs.index')->with('success','Thêm mới thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Thêm mới thất bại');
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
    public function edit(tab $tab)
    {
        return view('admin.tabs.edit',compact('tab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TabUpdateRequest $request, tab $tab)
    {
        try {
            
            $tab->update($request->all());
            return redirect()->route('tabs.index')->with('success','Cập nhật thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        tab::where('id',$id)->delete();
        return redirect()->route('tab.index')->with('success','Xoá thành công');
    }
}
