<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MapsTest extends TestCase
{
    /**
     * 
     */
    public function testThatStore1PageIsWorking()
    {
        $response = $this->call('GET', '/store1');
        $this->assertTrue($response->isOK());
    }

    /**
     * 
     */
    public function testThatStore2PageIsWorking()
    {
        $response = $this->call('GET', '/store2');
        $this->assertTrue($response->isOK());
    }

    /**
     * 
     */
    public function testThatStore3PageIsWorking()
    {
        $response = $this->call('GET', '/store3');
        $this->assertTrue($response->isOK());
    }

    /**
     * 
     */
    public function testThatStore4PageIsNotWorking()
    {
        $response = $this->call('GET', '/store4');
        $this->assertTrue($response->isOK()==false);
    }

    /**
     * 
     */
    public function testThatStore1MarkerIsAdded()
    {
        $store = new \App\Models\Store;

        $store->setStore12('braman miami, Miami, FL');

        $this->assertEquals($store->getStore12(), 'braman miami, Miami, FL');
    }
    
    /**
     * 
     */
    public function testThatStore2MarkerIsAdded()
    {
        $store = new \App\Models\Store;

        $store->setStore21('walt grace vintage, Miami, FL');

        $this->assertEquals($store->getStore21(), 'walt grace vintage, Miami, FL');
    }
}
