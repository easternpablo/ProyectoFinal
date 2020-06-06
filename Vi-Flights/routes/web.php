<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'vi-flights','middleware'=>'auth'], function () {
    Route::get('/','InicioController@index');
    Route::get('/mi-panel','Inicio2Controller@index');
    /*** Rutas Aerolíneas ***/
    Route::get('/aerolineas','AirlineController@showAirlines');
    Route::get('/aerolineas/nuevo','AirlineController@create');
    Route::post('/aerolineas/nuevo/submit','AirlineController@save');
    Route::get('/aerolineas/{filename}','AirlineController@getImage');
    Route::get('/aerolineas/delete/{id}','AirlineController@delete')->where('id','[0-9]+');
    Route::get('/aerolineas/detail/{id}','AirlineController@showDetail')->where('id','[0-9]+');
    /*** Rutas Aviones ***/
    Route::group(['prefix'=>'flota'], function(){
        Route::get('/','PlanesController@index');
        Route::get('/aviones','PlanesController@showPlanes');
        Route::get('/aviones/nuevo','PlanesController@create');
        Route::post('/aviones/nuevo/submit','PlanesController@save');
        Route::get('/aviones/{filename}','PlanesController@getImage');
        Route::get('/aviones/delete/{id}','PlanesController@delete')->where('id','[0-9]+');
        Route::get('/aviones/detail/{id}','PlanesController@showDetail')->where('id','[0-9]+');
        Route::get('/aviones/detail/asignar-aerolinea/{id}','AirlinePlaneController@create')->where('id','[0-9]+');
        Route::post('/aviones/detail/asignar-aerolinea/{id}/submit','AirlinePlaneController@save')->where('id','[0-9]+');
        Route::get('/aerolineas','AirlinePlaneController@showAirlines');
        Route::get('/aerolineas/listado-aviones/{id}','AirlinePlaneController@showPlanesAirline')->where('id','[0-9]+');
    });
    /*** Ruta Vuelos ***/
    Route::get('/vuelos','FlightController@showFlights');
    Route::get('/vuelos/nuevo','FlightController@create');
    Route::post('/vuelos/nuevo/submit','FlightController@save');
    Route::get('/vuelos/delete/{id}','FlightController@delete')->where('id','[0-9]+');
    Route::get('/vuelos/detail/{id}','FlightController@showDetail')->where('id','[0-9]+');
    Route::get('/vuelos/oferta/nueva','FlightAirlineController@create');
    Route::post('/vuelos/oferta/nueva/submit','FlightAirlineController@save');
    /*** Rutas Destinos (Aeropuertos) ***/
    Route::group(['prefix'=>'destinos'], function () {
        Route::get('/','AirportController@index');
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
    /*** Rutas Tripulación (Pilotos) ***/
    Route::get('/pilotos','PilotController@showPilots');
    Route::get('/pilotos/nuevo','PilotController@create');
    Route::post('/pilotos/nuevo/submit','PilotController@save');
    Route::get('/pilotos/{filename}','PilotController@getImage');
    Route::get('/pilotos/delete/{id}','PilotController@delete')->where('id','[0-9]+');
    Route::get('/pilotos/detail/{id}','PilotController@showDetail')->where('id','[0-9]+');
});
