<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/references', function () {
    return view('reference');
});

// Perceptual
Route::get('/typograhpy', function () {
    return view('typograhpy');
});
Route::get('/color', function () {
    return view('color');
});

// Functional
Route::get('/accordion', function () {
    return view('accordion');
});
Route::get('/alert', function () {
    return view('alert');
});
