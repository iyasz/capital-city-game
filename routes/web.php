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

Route::get('/province/start', function () {
    return view('province.start');
});
Route::get('/province', function () {
    return view('province.index');
});

Route::get('/province/{slug}/capital_city', function () {
    // return view('province.index');
});
