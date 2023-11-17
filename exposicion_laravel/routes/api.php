<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/user',[EstudiantesController::class,'index']);
Route::post('/user',[EstudiantesController::class,'store']);
Route::put('/user',[EstudiantesController::class,'update']);
Route::delete('/user/{id}',[EstudiantesController::class,'destroy']);
