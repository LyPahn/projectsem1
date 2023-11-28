<?php

use App\Http\Controllers\Admin\AccController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\user\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\RoomsController;
use App\Http\Controllers\Admin\RoomsTypeController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\user\BookingController as UserBookingController;
use App\Http\Controllers\user\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[HomeController::class,'index'])->name('user.index');
route::get('/list-room',[HomeController::class,'listRoom'])->name('user.listRoom');
route::get('/room-detail',[HomeController::class,'roomDetail'])->name('user.roomDetail');
route::get('/gioi-thieu',[HomeController::class,'about'])->name('user.about');
route::get('/dich-vu',[HomeController::class,'service'])->name('user.service');
route::get('/lien-he',[HomeController::class,'contact'])->name('user.contact');
Route::prefix('/login')->middleware('user')->group(function () {  
    Route::get('/', [UserController::class, 'login'])->name('login');
    Route::post('/loginPost', [UserController::class, 'loginPost'])->name('login.store');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::get('/account_actived/{dataUser}/{token}', [UserController::class, 'actived'])->name('user.actived');
    Route::post('/registerPost', [UserController::class, 'registerPost'])->name('register.store');
    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});
Route::get('/detail/{id}',[HomeController::class, 'roomDetail'])->name('room.detail');
route::get('/booking/{room}',[UserBookingController::class,'index'])->name('UserBooking.index');
route::post('/booking',[UserBookingController::class,'store'])->name('UserBooking.store');
route::post('/search',[SearchController::class,'store'])->name('user.search');
Route::get('/logon', [AdminController::class, 'logon'])->name('logon');
Route::post('/logonPost', [AdminController::class, 'logonstore'])->name('logon.store');
Route::get('/logout-admin', [AdminController::class, 'logout'])->name('logout');

route::fallback(function(){
    return view('error.404');
});
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/',[DashBoardController::class,'index'])->name('admin.index');
    Route::resource('rooms', RoomsController::class);
    Route::get('/rooms_trash', [RoomsController::class, 'trash'])->name('rooms.trash');
    Route::get('/rooms_restore/{id}', [RoomsController::class, 'restore'])->name('rooms.restore');
    Route::get('/rooms_forceDelete/{id}', [RoomsController::class, 'forceDeleted'])->name('rooms.forceDeleted');
    Route::resource('rooms_type', RoomsTypeController::class);
    Route::get('/rooms_type_trash', [RoomsTypeController::class, 'trash'])->name('rooms_type.trash');
    Route::get('/rooms_type_restore/{id}', [RoomsTypeController::class, 'restore'])->name('rooms_type.restore');
    Route::get('/rooms_type_forceDelete/{id}', [RoomsTypeController::class, 'forceDeleted'])->name('rooms_type.forceDeleted');
    Route::resource('booking', BookingController::class);
    Route::get('/trash_booking', [BookingController::class, 'trash'])->name('booking.trash');
    Route::get('/restore_booking/{id}', [BookingController::class, 'restore'])->name('booking.restore');
    Route::get('/forceDelete_booking/{id}', [BookingController::class, 'forceDeleted'])->name('booking.forceDeleted');
    route::resource('account', AccController::class);
});