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
Auth::routes();

Route::group(['middleware' => ['web','auth']], function(){
  Route::get('/', function () {
      return view('auth.login');
  });

  Route::get('/home', function() {
    if (Auth::user()->admin == 0) {
      return view('cashier.home');
    }else if (Auth::user()->admin == 2) {
      return view('branch_admin.home');
    }  else if (Auth::user()->admin == 1){
      $users['users'] = App\User::all();
      return view('admin.home', $users);
    }
  });
});


// Route::get('/admin/add', function () {
//     return view('auth.register');
// });

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/branch_admin', function () {
    return view('branch_admin.home');
});


//Route::get('/home', 'homecontroller@index')->name('home');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/listEmployees', 'AdminController@index')->name('list');

Route::get('/admin/delete/employee/{id}','adminController@deleteEmployeeById');

Route::get('/branch_admin/listItems', 'ItemsController@list')->name('list');

Route::get('/branch_admin/delete/item/{id}','ItemsController@deleteItemById');

//Route::get('/admin/home','admin\homeController@index');
