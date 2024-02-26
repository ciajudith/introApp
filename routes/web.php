<?php

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
    return view('app');
});


Route::get('/page1', function () {
    return view('pages.page1');
});

Route::get('/page2', function () {
    return view('pages.page2');
});

Route::get('/page3', function () {
    return view('pages.page3');
});
