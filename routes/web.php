<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\adminDashboard;
use App\Http\Controllers\userDashboard;
use App\Http\Controllers\product;
use App\Http\Controllers\variant;

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
// Admin
Route::get('/admin/signin', [AdminAuth::class, 'index'])->middleware('guest');
Route::post('/admin/signin', [AdminAuth::class, 'adminSignIn']);
Route::post('/admin/signout', [AdminAuth::class, 'adminSignOut']);

Route::get('/admin', [adminDashboard::class, 'index'])->middleware('admin');

Route::get('/admin/product', [product::class, 'index'])->middleware('admin');
Route::get('/admin/variant', [variant::class, 'index'])->middleware('admin');

