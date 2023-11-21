<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IkanController;
use App\Http\Controllers\BookingController;
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

Route::get('/', [HomeController::class, 'index']);

Route::controller(IkanController::class)->prefix("ikan")->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::get('/{id}/edit', 'edit');
    Route::delete('/{id}', 'destroy');
});


Route::controller(BookingController::class)->prefix("booking")->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::get('/{id}/edit', 'edit');
    Route::delete('/{id}', 'destroy');
});
