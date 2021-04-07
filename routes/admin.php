<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;



Route::get('',[HomeController::class, 'index'])->name('admin.home');

Route::resource('users',UserController::class)->names('admin.users');

Route::resource('category', CategoryController::class)->names('admin.categories');
Route::resource('tag', TagController::class)->names('admin.tags');
