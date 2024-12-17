<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JasperController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('jasper/compile',[JasperController::class, 'compile']);
Route::get('jasper/report/{name}/{ext?}', [JasperController::class, 'report']);
