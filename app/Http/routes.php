<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
//Route::get('/restaurants','RestaurantController@restaurants');

//API
Route::get('/api/{key}/restaurants','RestaurantController@apiRestaurants');

Route::get('/restaurants','RestaurantController@guest_restaurants')->middleware(['guest']);
//Route::get('/restaurants','RestaurantController@guest_restaurants');

Route::group(['middleware' => ['web']], function(){



    Route::post('/restaurants','RestaurantController@addRestaurant');
    Route::get('/restaurants','RestaurantController@restaurants');
    
    Route::get('/restaurant/{id}/tables','TableController@restaurantTables');
    Route::post('/restaurant/{restaurant}/tables','TableController@addTable');



});

