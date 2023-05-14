<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

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

Route::get('/medicines', function () {
    return response(["message" => "Hello world!"], 200)->header('Content-type', 'application/json');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
