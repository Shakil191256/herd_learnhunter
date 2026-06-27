<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',[aboutController::class,'index'])->name('about');