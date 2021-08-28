<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;

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


Route::get('/subject' , [SubjectController::class , 'index'])->name('subject.index');
Route::post('/subject/store' , [SubjectController::class , 'store'])->name('subject.store');
Route::get('/subject/edit/{id}' , [SubjectController::class , 'edit'])->name('subject.edit');
Route::post('/subject/update/{id}' , [SubjectController::class , 'update'])->name('subject.update');
Route::get('/subject/delete/{id}' , [SubjectController::class , 'delete'])->name('subject.delete');
