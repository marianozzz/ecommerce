<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


//Route::get('',[AdminController::class, 'index'])->names('admin.home');

Route::resource('users',AdminController::class)->names('admin.users');
