<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SclassController;

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


Route::get('/class' , [SclassController::class , 'index'])->name('class.index');
Route::post('/class/store' , [SclassController::class , 'store'])->name('class.store');
Route::get('/class/edit/{id}' , [SclassController::class , 'edit'])->name('class.edit');
Route::post('/class/update/{id}' , [SclassController::class , 'update'])->name('class.update');
Route::get('/class/delete/{id}' , [SclassController::class , 'delete'])->name('class.delete');
