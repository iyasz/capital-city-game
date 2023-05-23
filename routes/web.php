<?php

use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\TestController;
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
Route::get('/domge/run', function () {
    return view('domge-run.index');
});

Route::get('/pukul', function () {
    return view('pukul.start');
});

Route::get('/pukul/china', function () {
    return view('pukul.china');
});

Route::get('/province/start', function () {
    return view('province.start');
});
Route::get('/province', function () {
    return view('province.index');
});

Route::get('/province/{slug}/capital_city', [ProvinceController::class, 'index']);
Route::get('/search/capital_city', [ProvinceController::class, 'searchCapitalCity']);

Route::get('/test/anime', [TestController::class, 'index']);
Route::get('/test/pertanyaan/{id}', [TestController::class, 'pertanyaan']);
