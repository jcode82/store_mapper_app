<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GMaps;

class StoreController extends Controller
{
    /**
     * 
     */
    public function store1()
    {
        //Directions to store 1
        $config['center'] = 'carbuckets, Miami, FL';
        $config['zoom'] = '16';
        $config['map_height'] = '500px';
        $config['scrollwheel'] = false;
        $config['directions'] = TRUE;
        $config['directionsStart'] = 'carbuckets, Miami, FL';
        $config['directionsEnd'] = 'braman miami, Miami, FL';
        $config['directionsDivID'] = 'directionsDiv';

        //build the map
        GMaps::initialize($config);
        $map = GMaps::create_map();

        return view('welcome')->with('maps', $map);
    }

    /**
     * 
     */
    public function store2()
    {
        //Directions to store 2
        $config['center'] = 'carbuckets, Miami, FL';
        $config['zoom'] = '16';
        $config['map_height'] = '500px';
        $config['scrollwheel'] = false;
        $config['directions'] = TRUE;
        $config['directionsStart'] = 'carbuckets, Miami, FL';
        $config['directionsEnd'] = 'walt grace vintage, Miami, FL';
        $config['directionsDivID'] = 'directionsDiv';

        //build the map
        GMaps::initialize($config);
        $map = GMaps::create_map();

        return view('welcome')->with('maps', $map);
    }

    /**
     * 
     */
    public function store3()
    {
        //Directions to store 3
        $config['center'] = 'carbuckets, Miami, FL';
        $config['zoom'] = '16';
        $config['map_height'] = '500px';
        $config['scrollwheel'] = false;
        $config['directions'] = TRUE;
        $config['directionsStart'] = 'carbuckets, Miami, FL';
        $config['directionsEnd'] = 'hi tech motors, Miami, FL';
        $config['directionsDivID'] = 'directionsDiv';

        //build the map
        GMaps::initialize($config);
        $map = GMaps::create_map();

        return view('welcome')->with('maps', $map);
    }
}
