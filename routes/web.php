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

// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/getLocale', function () {
    
    $locale = App::getLocale(); print_r($locale);

});

Route::get('/setLocale/{locale}', function ($locale) {
    
    App::setLocale($locale);
	$locale = App::getLocale(); print_r($locale);    

});


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
],
function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	
	Auth::routes();

	Route::get('/', function()
	{	
		return view('welcome');
	});

	Route::get('/home', 'HomeController@index');
	
	Route::get('/test', function()
	{	
		return view('test');
	});

	Route::get('/logout', function()
	{	
		Auth::logout();
		
		return redirect('/');
	});

	Route::get('user/{name}', function ($name = 'John') {

	    return $name;
	});

});


// Route::group(['prefix' => LaravelLocalization::setLocale()], function()
// {
	
// 	Auth::routes();
	
// 	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
// 	Route::get('/', function()
// 	{	
// 		return view('welcome');
// 	});

// 	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
// 	Route::get('/test', function()
// 	{	
// 		return view('test');
// 	});

// 	Route::get('user/{name}', function ($name = 'John') {

// 	    return $name;
// 	});

	
// });