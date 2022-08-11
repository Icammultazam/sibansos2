<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaController;

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
    return view('landingpage');
});

// Route::get('/bnpt', function () {
//     return view('penerimabnpt');
// });

Route::get('/bnpt', [PenerimaController::class, 'index']);

Route::get('/agen', function () {
    return view('agen');
});

Route::get('/kpm', function () {
    return view('kpm');
});

Route::get('/salur', function () {
    return view('jadwalsalur');
});