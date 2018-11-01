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

Route::get('/', 'LoginController@getLogin')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/404','LoginController@getError');

Route::get('/login',['as'=>'getLogin','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);
Route::get('/register',['as'=>'getRegister','uses'=>'LoginController@getRegister']);
Route::post('/register',['as'=>'register','uses'=>'LoginController@postSignUp']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@getLogout']);


Route::prefix('manage')->middleware('role:user')->group(function(){


});


Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function(){
    Route::get('/','ManageController@index');
    Route::get('/dashboard','ManageController@index')->name('manage.dashboard');
    Route::resource('/users','UserController');
    Route::resource('/roles','RoleController');
    route::resource('/permissions','PermissionController');
    Route::post('/deleteUser','UserController@destroy');
    Route::resource('/brand','BrandController');
});

