<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'show']);

Route::get('admin', [App\Http\Controllers\AdminController::class, 'index']);




Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController')->middleware('role:admin,manager');
Route::resource('roles', 'RolesController')->middleware('can:isAdmin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
