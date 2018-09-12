<?php

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


Route::get('/', 'HomeController@index')->name('home');
// Route::get('/{category}', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/category','CategoryController');

Route::resource('/admin/products','ProductController');

Route::get('/admin/products/{id}/delete-image','ProductController@deleteImage');

Route::resource('/admin/slider','SliderController');

Route::get('/admin/slider/{id}/delete-image','SliderController@deleteImage');
Route::get('/admin/slider/{id}/publish', 'SliderController@publish');
// Route::get('/admin',function(){
//     return view('auth.login');
// });


Route::get('/contact', 'HomeController@contact');
Route::post('/saved-contact', 'HomeController@contactSaved');
Route::resource('/device','DeviceController');