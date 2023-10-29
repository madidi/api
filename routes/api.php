<?php

use App\Http\Controllers\AdminDashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Middleware\AdminCheck;
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

Route::name('admin')->prefix('v1')->middleware(AdminCheck::class)->group(function () {
    Route::get('/admin', [AdminDashboard::class, 'index']);
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


