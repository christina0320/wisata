<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

route::get('/',[HomeController::class, 'home']);


route::get('/dashboard',[HomeController::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/dashboard', function () {
//     return view('home.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::get('admin/dashboard',[HomeController::class, 'index']);
route::get('/invoice',[HomeController::class, 'invoice']);

route::get('view_product',[AdminController::class, 'index']);

route::get('user',[AdminController::class, 'user']);
route::get('ulasan',[AdminController::class, 'ulasan']);
// route::get('reservasi',[AdminController::class, 'reservasi']);

route::post('add_product',[AdminController::class, 'add_product']);

route::get('delete_category/{id}',[AdminController::class, 'delete_category']);

route::get('add_produk',[AdminController::class, 'add_produk']);

route::post('upload_produk',[AdminController::class, 'upload_produk']);

route::get('view_produk',[AdminController::class, 'view_produk']);

route::get('delete_produk/{id}',[AdminController::class, 'delete_produk']);

route::get('produk_details/{id}',[HomeController::class, 'produk_details']);

route::get('add_cart/{id}',[HomeController::class, 'add_cart'])->middleware(['auth', 'verified']);

route::get('mycart',[HomeController::class, 'mycart'])->middleware(['auth', 'verified']);
route::get('reservasii',[HomeController::class, 'reservasii'])->middleware(['auth', 'verified']);


route::get('delete_cart/{id}',[AdminController::class, 'delete_cart'])->middleware(['auth', 'verified']);

route::post('confirm_order',[HomeController::class, 'confirm_order'])->middleware(['auth', 'verified']);

route::get('view_order',[AdminController::class, 'view_order']);

route::get('myorder',[HomeController::class, 'myorder'])->middleware(['auth', 'verified']);

use App\Http\Controllers\ReservationController;

Route::post('/submit-reservation', [ReservationController::class, 'store'])->name('reservation.store');





