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


/*Route::get('/', 'HomeController@coming');*/
Route::post('/subscribe', 'HomeController@subscribe');

//Route::post('/users/loginas', 'HomeController@loginAs');
//Route::get('/loginas', 'HomeController@login');

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@contact_');
Route::get('/logout', 'HomeController@logout');
Route::get('/terms', 'HomeController@terms');
Route::get('/faq', 'HomeController@faq');



Route::group(['middleware' => ['user', 'auth']], function(){ 
  Route::post('/trado_shirt', 'HomeController@shirt');
  Route::get('/dashboard', 'HomeController@dashboard');
  Route::get('/farmshop', 'HomeController@investment');
  Route::get('/edit', 'HomeController@edit');
  Route::post('/edit_image', 'HomeController@edit_image');
  Route::post('/edit_info', 'HomeController@edit_info');
  Route::get('/password', 'HomeController@password');  
  Route::post('/password', 'HomeController@edit_password');
  Route::get('/activity', 'HomeController@activity');
  Route::get('/shop_{id}', 'HomeController@investment_');
  Route::get('/pay', 'PaymentController@index');
  Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
  Route::get('/payment_callback', 'PaymentController@handleGatewayCallback');
});
