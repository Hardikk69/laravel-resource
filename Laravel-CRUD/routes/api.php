<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/',[UserController::class,'login']);
Route::post('/',[UserController::class,'login']);

Route::get('/user/signup',[UserController::class,'create']);
Route::post('/user/signup',[UserController::class,'create']);
Route::post('/user/store',[UserController::class,'store']);
Route::put('/user/edit/user{id}',[UserController::class,'edit']);
Route::put('/user/update/user{id}',[UserController::class,'update']);
Route::delete('/user/delete/user{id}',[UserController::class,'destroy']);

Route::get('/admin/createAdmin',[AdminController::class,'create']);
Route::post('/admin/store',[AdminController::class,'store']);
Route::get('/admin/edit/admin{id}',[AdminController::class,'edit']);
Route::put('/admin/update/admin{id}',[AdminController::class,'update']);
Route::delete('/admin/delete/admin{id}',[AdminController::class,'destroy']);

Route::get('/resource/create',[ResourceController::class,'create']);
Route::post('/resource/store',[ResourceController::class,'store']);
Route::get('/resource/edit/resource{id}',[ResourceController::class,'edit']);
Route::put('/resource/update/resource{id}',[ResourceController::class,'update']);
Route::delete('/resource/delete/resource{id}',[ResourceController::class,'destroy']);

// loginAdmin
// login
// signup
// editUser
// deleteUser

// editAdmin
// deleteAdmin
// createAdmin

// addRes
// editRes
// deleteRes
// toggleStatusRes

