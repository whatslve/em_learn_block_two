<?php

namespace lesson3;

class Bike extends Vehicle
{
    public function move() : void {
        echo 'Велосипед едет';
    }
}

$bike = new Bike();
$bike->move();
// ✅ "Велосипед едет"
