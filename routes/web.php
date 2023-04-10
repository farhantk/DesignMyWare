<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\adminDashboard;
use App\Http\Controllers\userDashboard;
use App\Http\Controllers\product;
use App\Http\Controllers\variant;
use App\Http\Controllers\transaction;
use App\Http\Controllers\adminExpedition;
use App\Http\Controllers\cart;
use App\Http\Controllers\transaksi;
use App\Http\Controllers\adminTransaction;

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
//user auth
Route::get('/', [UserAuth::class, 'view']);
Route::get('/signin', [UserAuth::class, 'view_SignIn'])->middleware('guest')->name('login');
Route::post('/signin', [UserAuth::class, 'SignIn']);
Route::get('/signup', [UserAuth::class, 'view_SignUp'])->middleware('guest');
Route::post('/signup', [UserAuth::class, 'SignUp']);
Route::post('/signout', [UserAuth::class, 'SignOut']);

Route::get('/user/profile', [UserDashboard::class, 'index'])->middleware('auth');
Route::put('/user/profile', [UserDashboard::class, 'edit']);

Route::get('/user/checkout', [transaction::class, 'view_checkout'])->middleware('auth');
Route::post('/user/checkout', [transaction::class, 'checkout'])->middleware('auth');

Route::get('/user/transaction', [transaction::class, 'index'])->middleware('auth');
Route::delete('/user/transaction/{itemId}/remove', [transaction::class, 'remove_item'])->middleware('auth');

// //Keranjang
Route::get('/user/cart', [Cart::class, 'view_keranjang'])->middleware('auth');

// Admin
Route::get('/admin/signin', [AdminAuth::class, 'index'])->middleware('guest');
Route::post('/admin/signin', [AdminAuth::class, 'adminSignIn']);
Route::post('/admin/signout', [AdminAuth::class, 'adminSignOut']);

Route::get('/admin', [adminDashboard::class, 'index'])->middleware('admin');

Route::get('/admin/product', [product::class, 'index'])->middleware('admin');
Route::get('/admin/variant', [variant::class, 'index'])->middleware('admin');

//Transaction
Route::get('/admin/transaction', [adminTransaction::class, 'index'])->middleware('admin');
Route::put('/admin/transaction/{orderId}/process', [adminTransaction::class, 'process'])->middleware('admin');
Route::put('/admin/transaction/{orderId}/deliver', [adminTransaction::class, 'deliver'])->middleware('admin');
Route::put('/admin/transaction/{orderId}/finish', [adminTransaction::class, 'finish'])->middleware('auth');

//CRUD Expedition
Route::get('/admin/expedition', [adminExpedition::class, 'index'])->middleware('admin');
Route::post('/admin/expedition', [adminExpedition::class, 'create']);
Route::delete('/admin/expedition/{id}/delete', [adminExpedition::class, 'delete'])->middleware('admin');
Route::put('/admin/expedition/{id}/edit', [adminExpedition::class, 'edit'])->middleware('admin');


// Route::get('/admin/')
Route::get('/admin/transaksi', [transaksi::class, 'view_transaksi'])->middleware('admin');
//Route::delete('/admin/pesanan-detail/{id}', [transaksi::class, 'destroy'])->name('pesanan-detail.destroy');
Route::patch('/admin/setuju/{id}', [transaksi::class, 'setuju'])->name('admin.setuju')->middleware('admin');
Route::delete('/admin/hapus/{id}', [transaksi::class, 'destroy'])->name('admin.hapus')->middleware('admin');
Route::post('/user/pesanan_detail/{id}/negosiasi', [Cart::class, 'negosiasi'])->name('pesanan_detail.negosiasi')->middleware('auth');
// Route::post('/admin/pesanan_detail/{id}/setuju', [transaksi::class, 'setuju'])->name('pesanan_detail.setuju')->middleware('admin');
Route::delete('/user/pesanan_detail/{id}/delete', [Cart::class, 'delete'])->name('pesanan_detail.delete')->middleware('auth');
