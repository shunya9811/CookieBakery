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
    return view('index');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/contact', function () {
    return view('contact');
});