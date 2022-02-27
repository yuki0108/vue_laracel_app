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

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('index');
Route::post('/task', [App\Http\Controllers\TaskController::class, 'store'])->name('store');
Route::get('/tasks/{task}', [App\Http\Controllers\TaskController::class, 'show'])->name('show');
Route::patch('/task/{task}', [App\Http\Controllers\TaskController::class, 'update'])->name('update');
Route::delete('/task/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('destroy');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});