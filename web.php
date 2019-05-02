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

  Route::get('home', function() {
    if (Auth::user()->admin == 1) {
      return view('admin.home');
    } else if(Auth::user()->admin == 2)
	{
		$users['users'] = App\User::all();
      return view('branch_admin.home', $users);
	}
	else {
      $users['users'] = App\User::all();
      return view('cashier.home', $users);
    }
  });
});


// Route::get('/admin/add', function () {
//     return view('auth.register');
// });

Route::get('/admin/register', function () {
    return view('admin.register');
    //return "done";
});


//Route::get('/home', 'homecontroller@index')->name('home');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/listEmployees', 'AdminController@index')->name('list');

Route::get('/admin/UpdateEmployees', 'AdminController@updateUser')->name('updateUser');
    //Route::get('/admin/register','AdminController@AddEmployees');

Route::get('/admin/delete/employee/{id}','adminController@deleteEmployeeById');

Route::get('/Branch/Items','itemsController@list');
Route::get('/Branch/delete/item/{id}','itemsController@deleteItemById');

Route::get('/home/additem','ItemsController@add_item');
Route::post('/home/additem','ItemsController@add_item');

Route::get('/branch_admin/updateitem/{id}','ItemsController@updateItem');
Route::post('/branch_admin/updateitem/{id}','ItemsController@updateItem');


//Route::get('/admin/home','admin\homeController@index');

Route::get('/home/make','orderController@all_items');
Route::get('/home/make/{id}','orderController@all_items');
