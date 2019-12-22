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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/admin', function () {
	$items= \App\Item::all();
	return view('admin.index',compact('items'));
});
// Route::get('/managment', function () {
//     return view('admin.managment');
// });
Route::get('/statistics', function () {
    return view('admin.statistics');
});
// Route::get('/items', function () {
//     return view('admin.items');
// });

Route::resource('items', 'ItemController');
Route::resource('sales', 'SaleController');
Route::resource('management', 'MController');
Route::get('/members', function () {
    return view('admin.members');
});

// Route::resource('products', 'ItemController'); 





















Route::get('/', function () {
     if(session()->get('user') =="")
     {
    return view('LoginBootstrap');
} else{
return view('index');
}}
);

Route::get('/Max', function () {
    return view('Max');
});
Route::get('/Admin', function () {
	if(session()->get('user') =="")
   {
    return view('LoginBootstrap');
  } else{
    return view('index');
  }
    return view('LoginBootstrap');
});
Route::get('/Logout', function () {

session()->put('user',"");
    return view('LoginBootstrap');
});
Route::get('/tabs', function () {
    return view('tabs');
});


Route::get('/LoginBootstrap','LoginController@Login');
Route::post('/subm','LoginController@store');
Route::resource('submit','LoginController@find');
Route::post('/submitC','ComplainController@store');

Route::post('/tableSubmit','CReservation@store');
Route::resource('sub','lcontroller');



Route::get('/nav', function () {
    return view('navbar	');
});
