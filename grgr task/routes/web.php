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

Route::get('/', function () {
    return view('auth.login');
});
// Route::get('/admin/add', function () {
//     return view('auth.register');
// });
Route::get('/admin/home', function () {
    return view('admin.home');
});
Route::get('/register', function () {
    return view('auth.register');
});


//Route::get('/home', 'homecontroller@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/listEmployees', 'AdminController@index')->name('list');

//Route::get('/admin/home','admin\homeController@index');
