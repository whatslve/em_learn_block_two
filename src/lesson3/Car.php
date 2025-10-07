<?php

namespace lesson3;
use lesson3\Refuable;
class Car extends Vehicle implements Refuable
{
    public function move() : void {
        echo "Машина едет";
    }

    public function refuel() : void {
        echo 'Машина заправлена';
    }
}

$car = new Car();
$car->move();
// ✅ "Машина едет"

$car->refuel();
// ✅ "Машина заправлена"
