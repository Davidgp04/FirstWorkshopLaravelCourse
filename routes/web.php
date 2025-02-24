<?php

use Illuminate\Support\Facades\Route;
$customUserController = 'App\Http\Controllers\CustomUserController';

Route::get('/', 'HomeController@home');
Route::get('/user/create', [$customUserController,'create'])->name('user.create');
Route::post('/user/save', [$customUserController,'save'])->name('user.save');
Route::post('/user', [$customUserController,'index'])->name('user.index');
// Route::post('/user/{id}', [$customUserController,'show'])->name('user.show');
