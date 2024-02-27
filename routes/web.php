<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdditionController;
use App\Http\Controllers\MultiplicationController;
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
    return view('layouts.app');
});

Route::get('/addition', [AdditionController::class,'index'])->name('addition');
Route::post('/additionSimple', [AdditionController::class,'additionSimple'])->name('additionSimple');
Route::get('/multiplication', [MultiplicationController::class,'index'])->name('multiplication');
Route::post('/simpleMultiplication', [MultiplicationController::class,'simpleMultiplication'])->name('simpleMultiplication');

Route::get('/racinecarree', function () {
    return view('racinecarree');
});


//Route::get('/multiplication', [AdditionController::class,'multiplication']);
//Route::get('/racinecarree', [AdditionController::class,'racinecarree']);

