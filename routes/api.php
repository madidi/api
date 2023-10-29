<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::name('admin')->prefix('v1')/*->middleware('AdminCheck')*/->group(function (){
    Route::get('/admin', function () {
        $token = Str::random(10);
        return response()->json([
            'token' => $token,
            'data' => ['users' => [
                ['name' => 'ali', 'age' => 20],
                ['name' => 'sara', 'age' => 60],
                ['name' => 'tomas', 'age' => 2]
            ]
            ],
            'status' => 'ok'
        ], 200);
    });
    Route::get('/admin/order', function () {
        $token = Str::random(10);
        return response()->json([
            'token' => $token,
            'data' => ['users' => [
                ['name' => 'ali', 'age' => 20],
                ['name' => 'sara', 'age' => 60],
                ['name' => 'tomas', 'age' => 2]
            ]
            ],
            'status' => 'ok'
        ], 200);
    });
});


