<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\registercontroller;
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

Route::post('register', [registercontroller::class, 'register']);

Route::post('login', [logincontroller::class, 'login']);

Route::post('login', [logincontroller::class, 'login']);

Route::post('refreshToken', [logincontroller::class, 'refreshToken']);

Route::middleware('auth:api')->group(function () {
    Route::get('product', [productcontroller::class, 'product']);
});

