<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rooms;
use App\Models\type_rooms;
use App\Models\images;
use App\Http\Requests\Admin\RoomPostRequest;
use App\Http\Requests\Admin\RoomEditRequest;
use App\Models\bookings;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = rooms::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type_rooms = type_rooms::all();
        return view('admin.rooms.add',compact('type_rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoomPostRequest $request)
    {
        
        $fileName = $request->photo->getClientOriginalName();
        $request->photo->StoreAs('public/images',$fileName);
        $request->merge(['image'=>$fileName]);
        try {
            
            $rooms = rooms::create($request->all());
            if ($fileName && $request->photos) {
                foreach ($request->photos as $key => $value) {
                    $fileNames = $value->getClientOriginalName();
                    $value->StoreAs('public/images',$fileNames);
                    images::create([
                        'room_id'=>$rooms->id,
                        'image'=>$fileNames
                    ]);
                }
            }
            return redirect()->route('rooms.index')->with('success','Thêm mới thành công');
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
    public function edit(rooms $room)
    {
        $listRoom = rooms::all();
        // dd($listRoom->all());
        $listimages = images::where('room_id',$room->id)->get();
        $type_rooms = type_rooms::all();
        return view('admin.rooms.edit',compact('room','type_rooms','listimages','listRoom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoomEditRequest $request, rooms $room)
    {         
        
        if(!$request->photo==""){
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->StoreAs('public/images',$fileName);
            $request->merge(['image'=>$fileName]);
        }else{
            $request->merge(['image'=>$room->image]);
        }
        try {
        
            $room->update($request->all());
            if ($room && $request->photos) {
                images::where('room_id',$room->id)->delete();  
                foreach ($request->photos as $key => $value) {                    
                    $fileNames = $value->getClientOriginalName();
                    $value->StoreAs('public/images',$fileNames);
                    images::where('id',$request->room_id)->create([
                        'room_id'=>$room->id,
                        'image'=>$fileNames
                    ]);
                }
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Cập nhật thất bại');
        }
        return redirect()->route('rooms.index')->with('success','Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            if(bookings::where('room_id', $id) == ''){

                rooms::where('id',$id)->delete();
                return redirect()->route('rooms.index')->with('error','Xoá thành công');
            }
            return redirect()->back()->with('error','Phòng đã đặt không thể xoá');
        } catch (\Throwable $th) {
            return redirect()->back('error','Xoá thất bại');
        }
    }
}