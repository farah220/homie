<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['web','auth:admins']],function (){
Route::view('/','dashboard.index');
Route::resource('admins','AdminController');
Route::resource('contact','ContactController')->except(['store','create','edit','update']);

Route::post('/logout','AdminController@logout')->name('logout');

});
