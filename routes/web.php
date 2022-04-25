<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UKMController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\DashboardController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AdminController::class, 'index'])->name('login');
    Route::post('/login', [AdminController::class, 'authenticate']);
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index']);

    Route::get('/section', [SectionController::class,'index']);

    Route::get('/news', [NewsController::class,'index']);

    Route::get('/gallery', [GalleryController::class,'index']);

    Route::get('/ukm', [UKMController::class,'index']);
    
    Route::post('/logout', [AdminController::class, 'logout']);
});


