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
    return view('welcome');
});

Route::get('/test', function () {
    return'Hello auth';
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/logout', 'Auth\RegisterController@Logout');

Route::get('/movie', 'Movie\MovieController@index')->middleware('auth');

//when the resource controller is active/present in the codes the above auth function will not work
Route::resources([
    'movie' => 'Movie\MovieController',
]);

Auth::routes();

Route::get('/home', 'Movie\MovieController@index')->name('home');
Route::get('/home12', 'HomeController@index')->name('home');
