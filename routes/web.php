<?php

use Illuminate\Http\Request;
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


//Route::get('/', 'UserController@index');

Route::get('/', 'HomeController@index');

Route::get('/uploaduserphoto','UploadUserPhoto@index');

// Route::post('/uploaduserphoto', function()
//     {
//         dd(request()->all());
//     });


Route::post('/uploadUserAvatar','UploadUserPhoto@uploadUserAvatar');

//Route::get('/studentrecords', 'HomeController@index');

Route::post('/create', 'StudentController@create');

Route::get('/student/{ID}', 'StudentController@view');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
