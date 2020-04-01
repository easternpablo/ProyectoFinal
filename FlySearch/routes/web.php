<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'flysearch','middleware'=>'auth'], function () {

    Route::get('/',function(){
        return view('inicio');
    });

    /*** Rutas Aerolíneas ***/
    Route::get('/aerolineas','AirlineController@showAirlines');

    /*** Rutas Destinos (Aeropuertos) ***/
    Route::group(['prefix'=>'destinos'], function () {

        Route::get('/','AirportController@form');

        /*** Rutas Países ***/
        Route::get('/paises','CountryController@showCountries');
        Route::get('/paises/nuevo','CountryController@create');
        Route::post('/paises/nuevo/submit','CountryController@save');
        Route::get('/paises/{filename}','CountryController@getImage');
        Route::get('/paises/delete/{id}','CountryController@delete')->where('id','[0-9]+');

        /*** Rutas Ciudades ***/
        Route::get('/ciudades','CityController@showCities');
        Route::get('/ciudades/nuevo','CityController@create');
        Route::post('/ciudades/nuevo/submit','CityController@save');
        Route::get('/ciudades/{filename}','CityController@getImage');
        Route::get('/ciudades/delete/{id}','CityController@delete')->where('id','[0-9]+');

        /*** Rutas Aeropuertos ***/
        Route::get('/aeropuertos','AirportController@showAirports');
        Route::get('/aeropuertos/nuevo','AirportController@create');
        Route::post('/aeropuertos/nuevo/submit','AirportController@save');
        Route::get('/aeropuertos/{filename}','AirportController@getImage');
        Route::get('/aeropuertos/delete/{id}','AirportController@delete')->where('id','[0-9]+');
        Route::get('/aeropuertos/detail/{id}','AirportController@showDetail')->where('id','[0-9]+');
    });
});
