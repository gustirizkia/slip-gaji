<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\OmsetController;
use App\Http\Controllers\Admin\PenggajianController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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
    if(auth()->user()){
        return redirect('/admin');
    }else{
       return redirect()->route('login');
    }
    abort(404);
    return view('welcome');
});

Route::get('hello', function(){
    return view('pages.admin.dashboard');
});

Route::get('dashboard', function(){
     return view('pages.admin.dashboard');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::resource('karyawann', AbsenController::class);
    Route::resource('barang', BarangController::class);
    Route::resource('penggajian', PenggajianController::class);
    Route::resource('omset', OmsetController::class);
});

Route::get('home/logout', [AuthenticatedSessionController::class, 'destroy']);




