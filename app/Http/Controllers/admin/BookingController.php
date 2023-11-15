<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\BookingStoreRequest;
use App\Models\bookings;
use App\Models\rooms;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\CheckOutDateGreaterThanCheckInDate;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = bookings::orderBy('created_at' , 'desc')->get();
        return view('admin.booking.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = rooms::all();
        $users = User::all();
        return view('admin.booking.add',compact('rooms','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookingStoreRequest $request)
    {   
        try {
            // $request->validate([
            //     'check_in' => 'required|date',
            //     'check_out' => ['required', 'date', new CheckOutDateGreaterThanCheckInDate('check_in')],
            // ]);
            bookings::create($request->all());
            return redirect()->route('booking.index')->with('success','Thêm mới thành công');
            
        } catch (\Throwable $th) {
            dd($th);
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
    public function edit(bookings $booking)
    {
        $rooms = rooms::all();
        $users = User::all();
        return view('admin.booking.edit',compact('booking','rooms','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,bookings $booking)
    {
        try {
            //code...
            $booking->update($request->all());
            return redirect()->route('booking.index')->with('success','Cập nhật thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error','Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        bookings::where('id',$id)->delete();
        return redirect()->route('booking.index')->with('success','Xoá thành công');
    }

    public function trash(){
        $deleted_at = bookings::onlyTrashed()->get();
        return view('admin.booking.trash',compact('deleted_at'));
    }
    public function restore($id) {
        bookings::withTrashed()->where('id',$id)->restore();
        return redirect()->route('booking.index');
    }
    public function forceDeleted($id) {
        bookings::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('booking.trash');
    }
}
