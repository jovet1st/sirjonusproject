<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

Route::get('/getAllStudent', [studentController::class, 'create']);
Route::post('/addAllStudent', [studentController::class, 'store']);
Route::post('/updAllStudent', [studentController::class, 'update']);
Route::post('/desAllStudent', [studentController::class, 'destroy']);