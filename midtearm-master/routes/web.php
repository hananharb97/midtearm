<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::resource('/students', 'StudentController');


// Route::get('/students', 'StudentController@index');
// Route::get('/students/create','StudentController@create');
// Route::post('/students','StudentController@store');
// Route::delete('/students/{student}','StudentController@destory');
// Route::GET('/students/{student}','StudentController@show');
//  Route::GET('/students/{student}/edit','StudentController@edit');
//  Route::PATCH ('/students/{student}','StudentController@update');