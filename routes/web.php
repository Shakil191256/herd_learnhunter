<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\formController;
use App\Http\Controllers\formSubmitController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',[aboutController::class,'index'])->name('about');


Route::get('/form',[formController::class,'index'])->name('form.us');
Route::post('/form/submit',[formSubmitController::class,'index'])->name('submit.form');