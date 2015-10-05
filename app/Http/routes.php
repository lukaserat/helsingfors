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


Route::get(trans('routes.home'), function() {
    $view = [app()->getLocale(), 'index'];
    return view(implode('.', $view));
});


foreach(trans('routes') as $key => $urls) {
    if ($key == 'home') continue;

    foreach($urls as $view => $url) {

        Route::get($url, function() use($view, $key) {
            $view = [app()->getLocale(), $key, $view];
            return view(implode('.', $view));
        });

    }
}

Route::controller('booking', 'BookingController', [
    'postBooking' => 'booking.create'
]);



Route::group(['prefix'=>'sistema'], function() {

    Route::get('/', function() {
        return view('sistema.index');
    });

    Route::controller('activities', 'ActivitiesController', [
        'getAdd' => 'sistema.activities.add',
        'getList' => 'sistema.activities.list',
        'getSlider' => 'sistema.activities.slider',
    ]);

});
