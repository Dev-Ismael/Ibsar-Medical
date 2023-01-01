<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('offers', '\App\Http\Controllers\API\OfferController');
Route::apiResource('services', '\App\Http\Controllers\API\ServiceController');
Route::apiResource('members', '\App\Http\Controllers\API\MemberController');
Route::apiResource('articles', '\App\Http\Controllers\API\ArticleController');
Route::apiResource('responsibilities', '\App\Http\Controllers\API\ResponsibilityController');
Route::apiResource('orders', '\App\Http\Controllers\API\OrderController');
Route::apiResource('subscribers', '\App\Http\Controllers\API\SubscriberController');
Route::apiResource('appointments', '\App\Http\Controllers\API\AppointmentController');
