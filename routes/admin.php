<?php

use Illuminate\Support\Facades\Route;

route::name('admin.')->prefix('learnhunter')->group(function(){

Route::get('/admin',function(){
   return "this my admin route";})->name('us');

Route::get('/admin/dashboard',function(){
   return "this my admin dashboard route";})->name('dashboard');
});
