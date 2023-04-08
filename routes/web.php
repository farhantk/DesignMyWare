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
Route::get('/signin', [UserAuth::class, 'view_SignIn'])->middleware('guest');
Route::post('/signin', [UserAuth::class, 'SignIn']);
Route::get('/signup', [UserAuth::class, 'view_SignUp'])->middleware('guest');
Route::post('/signup', [UserAuth::class, 'SignUp']);
Route::post('/signout', [UserAuth::class, 'SignOut']);

Route::get('/user/profile', [UserDashboard::class, 'index'])->middleware('auth');
Route::put('/user/profile', [UserDashboard::class, 'edit']);

Route::get('/user/checkout', [transaction::class, 'view_checkout'])->middleware('auth');

Route::get('/user/transaction', [transaction::class, 'index'])->middleware('auth');
Route::get('/user/transaction/{orderid}/detail', [transaction::class, 'detail'])->middleware('auth');
Route::get('/user/transaction/{orderid}/invoice', [transaction::class, 'invoice'])->middleware('auth');
// Admin
Route::get('/admin/signin', [AdminAuth::class, 'index'])->middleware('guest');
Route::post('/admin/signin', [AdminAuth::class, 'adminSignIn']);
Route::post('/admin/signout', [AdminAuth::class, 'adminSignOut']);

Route::get('/admin', [adminDashboard::class, 'index'])->middleware('admin');

Route::get('/admin/product', [product::class, 'index'])->middleware('admin');
Route::get('/admin/variant', [variant::class, 'index'])->middleware('admin');

//CRUD Expedition
Route::get('/admin/expedition', [adminExpedition::class, 'index'])->middleware('admin');
Route::post('/admin/expedition', [adminExpedition::class, 'create']);
Route::delete('/admin/expedition/{id}/delete', [adminExpedition::class, 'delete'])->middleware('admin');
Route::put('/admin/expedition/{id}/edit', [adminExpedition::class, 'edit'])->middleware('admin');




// //Keranjang
Route::get('/user/cart', [cart::class, 'view_keranjang'])->middleware('auth');
// Route::get('/admin/')
Route::get('/admin/transaksi', [transaksi::class, 'view_transaksi'])->middleware('admin');