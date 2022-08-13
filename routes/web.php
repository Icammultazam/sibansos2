<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\PenerimaPostController;

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

Route::get('/login',[LoginController::class,'index' ] )->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate' ] );
Route::get('/registrasi',[RegisterController::class,'index' ] )->middleware('guest');
Route::post('/registrasi',[RegisterController::class,'store' ] );
Route::post('/logout',[LoginController::class,'logout' ] );

Route::get('/dashboard',function(){
    return view ('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/penerimabnpt', PenerimaPostController::class)->middleware('auth');
Route::resource('/dashboard/agen', AgenController::class)->middleware('auth');

