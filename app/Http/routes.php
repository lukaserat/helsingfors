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

Route::get(trans('routes.home'), ['as' => 'home', function() {
    $view = [app()->getLocale(), 'index'];
    return view(implode('.', $view));
}]);


foreach( array_keys(config('app.locales')) as $locale)
{
    Route::group(['prefix' => $locale], function () use($locale) {

        foreach(trans('routes') as $key => $urls)
        {
            if ($key == 'home') continue;

            foreach($urls as $view => $url) {

                Route::get($url, ['as' => implode('.', [$locale, $key, $view]), function() use($view, $key) {
                    $view = [app()->getLocale(), $key, $view];
                    return view(implode('.', $view));
                }]);

            }
        }

    });
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
