<?php

use App\Http\Controllers\Admin\DashboardController;
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
    abort(404);
    return view('welcome');
});

Route::get('hello', function(){
    return view('pages.admin.dashboard');
});

Route::get('dashboard', function(){
     return view('pages.admin.dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

Route::get('home/logout', [AuthenticatedSessionController::class, 'destroy']);




