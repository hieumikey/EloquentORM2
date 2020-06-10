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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getphone', function(){
    return \App\User::find(1)->phone;
});

Route::get('/findform', 'UserController@findform');
Route::post('/find', 'UserController@find');

Route::get('/role', function(){
    return \App\Role::find(1)->role;
});