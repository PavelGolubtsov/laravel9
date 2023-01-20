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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('sanctum')->namespace('API')->group(function() {
    Route::post('register', 'AuthController@register');
    Route::post('token', 'AuthController@token');
});

Route::middleware('auth:sanctum')->get('/name', function (Request $request) {
    return response()->json(['name' => $request->user()->name]);
});
