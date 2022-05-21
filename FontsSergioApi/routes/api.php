<?php

use App\Http\Controllers\FontController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::resource('fonts', FontController::class);

Route::get('/fonts', [FontController::class, 'index'])->name('index');

Route::get('/fonts/download/{id}', [FontController::class, 'download'])->name('download');

Route::get('/fonts/show/{x}', [FontController::class, 'show'])->name('show');
