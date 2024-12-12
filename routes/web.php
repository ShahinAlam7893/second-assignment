<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return view('welcome');
});

Route::get('/my-profile/{id}', [ProfileController::class, 'index'])->name('profile');