<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiUserAuth;
use App\Http\Controllers\Api\ApiUserProfile;
use App\Http\Controllers\Api\ApiCheckout;
use App\Http\Controllers\Api\ApiTransaction;
use App\Http\Controllers\Api\ApiExpedition;
use App\Http\Controllers\Api\CartApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('signin', [ApiUserAuth::class, 'signIn']);
Route::post('signup', [ApiUserAuth::class, 'signUp']);
Route::post('signout', [ApiUserAuth::class, 'signOut'])->middleware('auth:sanctum');
Route::put('user/checkout', [ApiCheckout::class, 'checkout'])->middleware('auth:sanctum');
Route::get('user/transaction', [ApiTransaction::class, 'transaction'])->middleware('auth:sanctum');
Route::post('user/transaction/track', [ApiTransaction::class, 'track'])->middleware('auth:sanctum');
Route::post('user/transaction/finish', [ApiTransaction::class, 'finish'])->middleware('auth:sanctum');
Route::put('user/editprofile', [ApiUserProfile::class, 'updateProfile'])->middleware('auth:sanctum');
Route::get('user', [ApiUserProfile::class, 'getProfile'])->middleware('auth:sanctum');
Route::get('expedition', [ApiExpedition::class, 'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<<<<<<< HEAD
Route::get('user/cart', [CartApiController::class, 'getCart'])->middleware('auth:sanctum');
Route::post('user/cart/{id}/negotiation', [CartApiController::class, 'negotiation'])->name('pesanan_detail.negoisasi')->middleware('auth:sanctum');;
Route::delete('user/cart/{id}/delete', [CartApiController::class, 'deleteCartDetail'])->middleware('auth:sanctum');
=======
Route::get('/cart', [CartApiController::class, 'getCart'])->middleware('auth:sanctum');
Route::post('/cart/{id}/negotiation', [CartApiController::class, 'negotiation'])->middleware('auth:sanctum');;
Route::delete('/cart/{id}/delete', [CartApiController::class, 'deleteCartDetail'])->middleware('auth:sanctum');
>>>>>>> 656b8b938db9a6d5e2a9f10f6d95113ea260b2ad

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/user/cart', [CartApiController::class, 'getCart']);
// });