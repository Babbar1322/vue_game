<?php

namespace App\Http\Controllers;
use App\Events\WebsocketDemoEvent;
use App\timer;

use Illuminate\Http\Request;

class timercounter extends Controller
{
    public function testTimer() {
        // event(new WebsocketDemoEvent('dummydata'));
       $getTime = timer::all();

     $mytime = $getTime->time;
    }
    
}
