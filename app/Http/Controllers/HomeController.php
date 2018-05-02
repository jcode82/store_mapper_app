<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GMaps;

class HomeController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        //initiate store variable
        $store = new \App\Models\Store;

        //add geocaching to DB and set home map
        $config['geocodeCaching'] = true;
        $config['center'] = 'carbuckets, Miami, FL';
        $config['zoom'] = '16';
        $config['map_height'] = '500px';
        $config['scrollwheel'] = false;

        //setup a initial map onload
        GMaps::initialize($config);

        //add store markers
        $store->getStoreHq();
        $store->getStore1();
        $store->getStore2();
        $store->getStore3();

        $map = GMaps::create_map();

        return view('welcome')->with('maps', $map);
    }
}
