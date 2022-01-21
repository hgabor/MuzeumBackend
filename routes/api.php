<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PaintingController;
use App\Http\Controllers\Api\StatueController;
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

Route::resource('paintings', PaintingController::class)->middleware('auth:sanctum');
Route::resource('statues', StatueController::class);
Route::post('login', [AuthController::class, 'login']);
