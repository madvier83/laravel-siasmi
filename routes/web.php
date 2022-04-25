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
    
    Route::get('admin-dashboard', [DashboardController::class,'index']);

    Route::get('admin-section', [SectionController::class,'index']);
    Route::get('admin-section/{name}', [SectionController::class,'edit']);
    Route::post('admin-section/{id}/update', [SectionController::class,'update']);

    Route::get('admin-news', [NewsController::class,'index']);
    Route::get('admin-news/create', [NewsController::class,'create']);
    Route::post('admin-news/create', [NewsController::class,'store']);
    Route::get('admin-news/{id}/update', [NewsController::class,'edit']);
    Route::post('admin-news/{id}/update', [NewsController::class,'update']);
    Route::post('admin-news/{id}/delete', [NewsController::class,'destroy']);

    Route::get('admin-gallery', [GalleryController::class,'index']);
    Route::get('admin-gallery/create', [GalleryController::class,'create']);
    Route::post('admin-gallery/create', [GalleryController::class,'store']);
    Route::get('admin-gallery/{id}/update', [GalleryController::class,'edit']);
    Route::post('admin-gallery/{id}/update', [GalleryController::class,'update']);
    Route::post('admin-gallery/{id}/delete', [GalleryController::class,'destroy']);

    Route::get('admin-ukm', [UKMController::class,'index']);
    Route::get('admin-ukm/create', [UKMController::class,'create']);
    Route::post('admin-ukm/create', [UKMController::class,'store']);
    Route::get('admin-ukm/{id}/update', [UKMController::class,'edit']);
    Route::post('admin-ukm/{id}/update', [UKMController::class,'update']);
    Route::post('admin-ukm/{id}/delete', [UKMController::class,'destroy']);

    Route::post('logout', [AdminController::class, 'logout']);
});


