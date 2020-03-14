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
    return view('login');
});

//login

Route::get('/main','MainController@index'); 
Route::post('/main/checklogin','MainController@checklogin');
Route::get('main/home','MainController@home');
Route::get('main/logout','MainController@logout');


//CRUD

Route::get('/students','StudentsController@index');
Route::get('/students/create','StudentsController@create');
Route::get('/students/{student}','StudentsController@show');
Route::post('/students','StudentsController@store');
Route::delete('/students/{student}','StudentsController@destroy');
Route::get('/students/{student}/edit','StudentsController@edit');
Route::patch('/students/{student}','StudentsController@update');