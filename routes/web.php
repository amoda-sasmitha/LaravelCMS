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


Route::group(['middleware' => 'auth'], function () { 

    //accommodation
    Route::get('accommodation/create',  'MainController@create'  );
    Route::get('accommodation',  'MainController@index'  );
    Route::get('accommodation/tags/{query}',  'MainController@tags'  );
    Route::post('accommodation',  'MainController@store'  );

    //itineraries
    Route::get('itinerary/create',  'Itineraries@create'  );
    Route::get('itinerary',  'Itineraries@index'  );
    Route::post('itinerary',  'Itineraries@store'  );

    //daytour
    Route::get('daytour/create',  'Daytours@create'  );
    Route::get('daytour',  'Daytours@index'  );
    Route::post('daytour',  'Daytours@store'  );

    //destinations
    Route::get('destination/create',  'Destinations@create'  );
    Route::get('destination',  'Destinations@index'  );
    Route::post('destination',  'Destinations@store'  );
    
    //tripplans
    Route::get('tripplan/create/{trip_id}',  'TripPlan@create'  );
    Route::get('tripplan/{trip_id}',  'TripPlan@index'  );
    Route::post('tripplan',  'TripPlan@store'  );

    Route::get('/home', 'HomeController@adminindex')->name('home');


    });


//public accommodations
Route::get('accommodations',  'MainController@list'  );
Route::get('accommodations/{title}',  'MainController@single_accommodation'  );

//public itineraries
Route::get('itineraries/',  'Itineraries@list'  );
Route::get('itineraries/{title}',  'Itineraries@single_itinerary'  );

//public daytours
Route::get('daytours/',  'Daytours@list'  );
Route::get('daytours/{title}',  'Daytours@single_daytour'  );

//public home
Route::get('/', 'HomeController@index');

//public 
Route::get( 'our-story' , function(){ 
    return View::make('pages.ourstory');
});
Route::get( 'contact-us' , function(){ 
    return View::make('pages.contact_us');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);



Route::get('/discover-sri-lanka', 'ProvincesController@index');
Route::get('/discover-sri-lanka/{title}', 'ProvincesController@details');
