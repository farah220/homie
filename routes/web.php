<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\PropertyController;
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

Route::resource('contact', ContactController::class)->only(['index', 'store']);
Route::view('/', 'web.home')->name('web.home');

Route::get('/addProperty', [PropertyController::class, 'index'])->name('property_index');
Route::post('/property/store', [PropertyController::class, 'store'])->name('add_property');


Route::view('/admins/login', 'auth.admin_login')->name('admins.login-form');
Route::post('/dashboard/login', [AuthController::class,'dashboardLogin'])->name('admins.login');
Route::post('/logout', [AuthController::class,'logout'])->name('dashboard.logout');
