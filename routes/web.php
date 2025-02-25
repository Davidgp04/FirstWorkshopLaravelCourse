<?php

use Illuminate\Support\Facades\Route;
$customUserController = 'App\Http\Controllers\CustomUserController';
$homeController = 'App\Http\Controllers\HomeController';
Route::get('/', [$homeController,'home'])->name('home');
Route::get('/user', [$customUserController,'index'])->name('user.index');
Route::get('/user/create', [$customUserController,'create'])->name('user.create');
Route::post('/user/save', [$customUserController,'save'])->name('user.save');
Route::get('/user/success',[$customUserController,'success'])->name('user.success');
Route::get('/user/delete/{id}', [$customUserController,'delete'])->name('user.delete');
Route::get('/user/{id}', [$customUserController,'show'])->name('user.show');
// Route::post('/user/{id}', [$customUserController,'show'])->name('user.show');
