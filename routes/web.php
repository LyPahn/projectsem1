<?php

use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\admin\TabController;
use App\Http\Controllers\user\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\RoomsController;
use App\Http\Controllers\Admin\RoomsTypeController;
use App\Http\Controllers\Admin\BookingsController;

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

Route::prefix('admin')->group(function () {
    Route::get('/',[DashBoardController::class,'index'])->name('admin.index');
    // Route::resource('banner', BannerController::class);
    // route::resource('tabs',TabController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('rooms', RoomsController::class);
    Route::resource('rooms_type', RoomsTypeController::class);
    Route::resource('bookings', BookingsController::class);
    Route::get('/trash', [RoomsTypeController::class, 'trash'])->name('rooms_type.trash');
    Route::get('/restore/{id}', [RoomsTypeController::class, 'restore'])->name('rooms_type.restore');
    Route::get('/forceDelete/{id}', [RoomsTypeController::class, 'forceDeleted'])->name('rooms_type.forceDeleted');
});
