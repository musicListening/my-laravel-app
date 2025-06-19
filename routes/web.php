<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/Login', function () {
    return view('Login');
})->name('Login');
