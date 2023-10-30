<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Booking\BookingStoreRequest;
use App\Models\bookings;
use App\Models\rooms;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = bookings::all();
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
        bookings::create($request->all());
        return redirect()->route('booking.index');
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
            return redirect()->route('booking.index')->with('success','Update successful');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        bookings::where('id',$id)->delete();
        return redirect()->route('booking.index');
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
