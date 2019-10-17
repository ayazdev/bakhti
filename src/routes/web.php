<?php 

Route::group(['namespace' => 'ayazdev\Bakhti\Http\Controllers'], function(){
    Route::get('dashboard', 'HomeController@index');
    Route::get('send', 'HomeController@send');
});


