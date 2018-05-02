<?php

namespace App\Models;
use GMaps;

class Store
{
    public $first_store;

    public $second_store;

    //
    public function getStoreHq()
    {
        //add attributes to marker
        $marker = array
        (
            'position'=>'carbuckets, Miami, FL',
            'infowindow_content'=>'Car Buckets<br>'.'<br>2200 NW 2nd Ave Unit 104'.'<br>Miami, FL 33137'.'<br>(844) 467-0808',
            'icon'=>'http://maps.google.com/mapfiles/ms/micons/green-dot.png'
        );

        GMaps::add_marker($marker);

        return view('welcome')->with($marker);
    }

    //
    public function getStore1()
    {
        //add attributes to marker
        $marker = array
        (
            'position'=>'braman miami, Miami, FL',
            'infowindow_content'=>'Braman Miami<br>'.'<br>2060 Biscayne Blvd'.'<br>Miami, FL 33137'.'<br>(305) 571-1200<br>'.'<br><a href="/store1">Get Directions</a>'
        );

        GMaps::add_marker($marker);

        return view('welcome')->with($marker);
    }

    //
    public function getStore2()
    {
        //add attributes to marker
        $marker = array
        (
            'position'=>'walt grace vintage, Miami, FL',
            'infowindow_content'=>'Walt Grace Vintagei<br>'.'<br>2450 NW 2nd Ave'.'<br>Miami, FL 33137'.'<br>(786) 483-8180<br>'.'<br><a href="/store2">Get Directions</a>'
        );

        GMaps::add_marker($marker);

        return view('welcome')->with($marker);
    }
    
    //
    public function getStore3()
    {
        //add attributes to marker
        $marker = array
        (
            'position'=>'hi tech motors, Miami, FL',
            'infowindow_content'=>'Hi Tech Motors<br>'.'<br>47 NE 25th St'.'<br>Miami, FL 33137'.'<br>(786) 260-5944<br>'.'<br><a href="/store3">Get Directions</a>'
        );

        GMaps::add_marker($marker);

        return view('welcome')->with($marker);
    }

    //
    public function getStore4()
    {
        //add attributes to marker
        $marker = array
        (
            'position'=>'Majestik, Miami, FL',
            'infowindow_content'=>'Hi Tech Motors<br>'.'<br>47 NE 25th St'.'<br>Miami, FL 33137'.'<br>(786) 260-5944<br>'.'<br><a href="/store3">Get Directions</a>'
        );

        GMaps::add_marker($marker);

        return view('welcome')->with($marker);
    }

    //
    public function setStore12($firstStore)
    {
        $this->first_store = $firstStore;
    }

    //
    public function getStore12()
    {
        return $this->first_store;
    }

    //
    public function setStore21($secondStore)
    {
        $this->second_store = $secondStore;
    }

    //
    public function getStore21()
    {
        return $this->second_store;
    }
}
