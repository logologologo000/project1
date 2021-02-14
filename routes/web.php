<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*  */

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/hello/{name}/{age}', [HomeController::class, 'hello']);

/* Category */
Route::get('/category', [CategoryController::class, 'index']);

Route::get('/category/create', [CategoryController::class, 'create']);
Route::post('/category/store', [CategoryController::class, 'store']);

Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);

Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);

/* user */
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/create', [UserController::class, 'create'])->middleware('auth');
Route::post('/user/store', [UserController::class, 'store']);

Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/update/{id}', [UserController::class, 'update']);

Route::get('/user/delete/{id}', [UserController::class, 'delete']);

/* Post */

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post/store', [PostController::class, 'store']);

Route::get('/post/edit/{id}', [PostController::class, 'edit']);
Route::post('/post/update/{id}', [PostController::class, 'update']);

Route::get('/post/delete/{id}', [PostController::class, 'delete']);

/* auth */
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/dologin', [AuthController::class, 'doLogin']);
Route::get('/auth/register', [AuthController::class, 'register']);
Route::get('/auth/doregister', [AuthController::class, 'doRegister']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

