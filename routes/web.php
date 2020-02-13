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


Route::get('accommodation/create',  'MainController@create'  );
Route::get('accommodation',  'MainController@index'  );
Route::get('accommodation/tags/{query}',  'MainController@tags'  );
Route::post('accommodation',  'MainController@store'  );

Route::get('itineraries/create',  'Itineraries@create'  );
Route::get('itineraries',  'Itineraries@index'  );
Route::post('itineraries',  'Itineraries@store'  );

Route::get('daytours/create',  'Daytours@create'  );
Route::get('daytours',  'Daytours@index'  );
Route::post('daytours',  'Daytours@store'  );

Route::get('destinations/create',  'Destinations@create'  );
Route::get('destinations',  'Destinations@index'  );
Route::post('destinations',  'Destinations@store'  );

Route::get('tripplan/create/{trip_id}',  'TripPlan@create'  );
Route::get('tripplan/{trip_id}',  'TripPlan@index'  );
Route::post('tripplan',  'TripPlan@store'  );
