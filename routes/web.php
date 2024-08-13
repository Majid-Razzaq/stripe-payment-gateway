<?php

use App\Http\Controllers\stripeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[stripeController::class,'checkout'])->name('home');
Route::post('/session',[stripeController::class,'session'])->name('session');
Route::get('/success',[stripeController::class,'success'])->name('success');