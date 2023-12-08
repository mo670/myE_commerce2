<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/adminlogin', [App\Http\Controllers\Auth\loginController::class, 'adminlogin'])->name('adminlogin');


 Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');



