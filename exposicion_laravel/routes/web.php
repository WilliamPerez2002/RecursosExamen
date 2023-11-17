<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('estudiantes', [EstudiantesController::class,'index']);
Route::get('estudiantes/create', [EstudiantesController::class,'create']);
Route::post('estudiantes', [EstudiantesController::class,'store']);
Route::get ('estudiantes/{id}/edit', [EstudiantesController::class,'edit']);
Route::put ('estudiantes/{id}', [EstudiantesController::class,'update']);
Route::delete ('estudiantes/{id}', [EstudiantesController::class,'destroy']);




