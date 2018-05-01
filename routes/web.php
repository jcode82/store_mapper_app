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

Route::get('/', function () {

    $config['center'] = 'carbuckets, Miami, FL';
    $config['zoom'] = '16';
    $config['map_height'] = '500px';
    $config['scrollwheel'] = false;

    GMaps::initialize($config);

    //add marker
    $marker['position'] = 'carbuckets, Miami, FL';
    $marker['infowindow_content'] = 'Car Buckets';
    GMaps::add_marker($marker);

    //add marker
    $marker['position'] = 'braman miami, Miami, FL';
    $marker['infowindow_content'] = 'Braman Miami';
    GMaps::add_marker($marker);

    //add marker
    $marker['position'] = 'walt grace vintage, Miami, FL';
    $marker['infowindow_content'] = 'Walt Grace Vintagei';
    GMaps::add_marker($marker);

     //add marker
     $marker['position'] = 'hi tech motors, Miami, FL';
     $marker['infowindow_content'] = 'Hi Tech Motors';
     $marker['icon'] = 'http://maps.google.com/mapfiles/ms/micons/green-dot.png';
     GMaps::add_marker($marker);

    $map = GMaps::create_map();

    return view('welcome')->with('maps', $map);
});
