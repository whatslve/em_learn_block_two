<?php

namespace lesson3;
require_once 'Vehicle.php';

class Bike extends Vehicle
{
    public function move() : void {
        echo 'Велосипед движется';
    }
}

$bike = new Bike();
$bike->move();
// ✅ "Велосипед едет"
