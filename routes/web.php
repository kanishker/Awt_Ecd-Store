<?php
use App\Model\Movie;

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
Route::get('/add-to-cart/{id}',[
    'uses'=>'Cart\CartController@AddToCart',
    'as'=>'movie.add-to-cart'
]);
Route::get('/viewcart',[
    'uses'=>'Cart\CartController@getCart',
    'as'=>'movie.viewCart'
]);
Route::get('/resetcart',[
    'uses'=>'Cart\CartController@ClearCart',
    'as'=>'movie.Clearcart'
]);

Route::get('/checkout',[
    'uses'=>'Cart\CartController@getCheckout',
    'as'=>'checkout',
    'middleware'=>'auth'
]);
Route::post('/checkout',[
    'uses'=>'Cart\CartController@postCheckout',
    'as'=>'checkout',
    'middleware'=>'auth'
]);

Route::post('/logout', 'Auth\RegisterController@Logout');

Route::get('/movie', 'Movie\MovieController@index',[
'as'=>'movie.index']);
//->middleware('auth');

Route::get('/movie/{id}', 'Movie\MovieController@show',[
'as'=>'movie.show']);//->middleware('auth');

//when the resource controller is active/present in the codes the above auth function will not work


Auth::routes();

Route::get('/home', 'Movie\MovieController@index')->name('home');
//Route::get('/home12', 'HomeController@index')->name('home');

Route::get('/home13', 'Movie\MovieController@index',[
    'as'=>'movie.home'
]);

Route::get('/livesearch', 'SearchController@index',[
    'as'=>'search'
]);
Route::get('/livesearch/action', 'SearchController@search2')
    ->name('live_search.action');

Route::Post ('/search', 'SearchController@search');

Route::get ('/search/{gen}', 'SearchController@searchbygen');

Route::get ('/admin',function(){
    return view('Admin.index');
});
Route::get ('/admin/youtube',function(){
    return view('Admin.youtube');
});
Route::get ('/admin/viewmovies',function(){
    return view('Admin.viewmovies');
});
Route::Post ('/admin/addmovie','Movie\MovieController@create');

Route::get ('/admin/viewmovieedit','Movie\MovieController@moviesadmin');

Route::get ('/admin/update/{id}','Movie\MovieController@getForupdate');

Route::PUT('/admin/updates','Movie\MovieController@update');

Route::get ('/admin/Delete/{id}','Movie\MovieController@destroy');

Route::get('/admin/orders','OrderController@index');



