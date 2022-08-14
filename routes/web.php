<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KpmpostController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AgenfrontController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\KpmController;
use App\Http\Controllers\PenerimaPostController;
use App\Http\Controllers\SalurController;

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

Route::get('/',[PenerimaController::class,'hitung']);

// Route::get('/bnpt', function () {
//     return view('penerimabnpt');
// });

Route::get('/bnpt', [PenerimaController::class, 'index']);
Route::get('/agen', [AgenfrontController::class, 'index'] );
Route::get('/kpm',[KpmController::class, 'index'] );
Route::get('/salur', [SalurController::class, 'index']);

Route::get('/login',[LoginController::class,'index' ] )->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate' ] );
Route::get('/registrasi',[RegisterController::class,'index' ] )->middleware('guest');
Route::post('/registrasi',[RegisterController::class,'store' ] );
Route::post('/logout',[LoginController::class,'logout' ] );

Route::get('/dashboard',function(){
    return view ('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/penerimabnpt', PenerimaPostController::class)->middleware('auth');
Route::resource('/dashboard/agen', AgentController::class)->middleware('auth');
Route::resource('/dashboard/kpmpost', KpmpostController::class)->middleware('auth');
Route::resource('/dashboard/jadwal', JadwalController::class)->middleware('auth');


