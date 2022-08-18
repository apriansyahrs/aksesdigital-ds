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
Route::get('/typography', function () {
    return view('perceptual.typography');
});
Route::get('/color', function () {
    return view('perceptual.color');
});

// Functional
Route::get('/accordion', function () {
    return view('functional.accordion');
});
Route::get('/alert', function () {
    return view('functional.alert');
});
Route::get('/badge', function () {
    return view('functional.badge');
});
Route::get('/breadchumb', function () {
    return view('functional.breadchumb');
});
Route::get('/button', function () {
    return view('functional.button');
});
Route::get('/card', function () {
    return view('functional.card');
});
Route::get('/carousel', function () {
    return view('functional.carousel');
});
Route::get('/forms/controls', function () {
    return view('functional.forms.controls');
});
Route::get('/forms/checks-radios', function () {
    return view('functional.forms.checks-radios');
});
Route::get('/forms/input-group', function () {
    return view('functional.forms.input-group');
});
Route::get('/pagination', function () {
    return view('functional.pagination');
});
Route::get('/rating', function () {
    return view('functional.rating');
});
Route::get('/ribbon', function () {
    return view('functional.ribbon');
});
Route::get('/separator', function () {
    return view('functional.separator');
});
Route::get('/symbol', function () {
    return view('functional.symbol');
});
Route::get('/table', function () {
    return view('functional.table');
});
Route::get('/tabs', function () {
    return view('functional.tabs');
});
