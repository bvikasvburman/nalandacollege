<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//01aef2
//http://www.packtpub.com/article/laravel4-creating-a-simple-crud-application-in-hours



Route::get('/', 'HomeController@index');
//Route::get('/', 'HomeController@postSignup');


Route::get('/aboutus', 'HomeController@getAboutUs');
Route::get('/contactus', 'HomeController@getContactUs');
Route::get('/portfolio', 'HomeController@getPortfolio');
Route::get('/course', 'HomeController@getCourses');
Route::get('/libraryfacility', 'HomeController@getLibraryFacility');
Route::get('/computerlab', 'HomeController@getComputerLab');


Route::post('/postSignup', 'HomeController@postSignup');
Route::post('/postContactUs', 'HomeController@postContactUs');


/*
 ********************************************
 ******************** admin Area ************
 ********************************************
*/
Route::group(array('prefix' => 'admin'), function()
{
    Route::get('/', 'SuperUsersController@index');
    Route::get('/login', 'SuperUsersController@index');
    Route::post('/postSignin', 'SuperUsersController@postSignin');
    Route::get('/logout', 'SuperUsersController@getLogout');
    Route::get('/dashboard', 'AdminHomeController@index');
    
    Route::resource('quotes', 'QuoteController');
    Route::resource('contents', 'ContentController');
    Route::resource('linkcategories', 'LinkCategoryController');
    Route::resource('links', 'LinkController');
    Route::resource('vevents', 'VEventController');
    Route::resource('users', 'UserController');
    Route::resource('staffs', 'StaffController');
    Route::resource('courses', 'CourseController');
    Route::resource('recentnewses', 'RecentNewsController');
    Route::resource('achievers', 'AchieverController');
    
    
});