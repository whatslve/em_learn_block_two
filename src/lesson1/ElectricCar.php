<?php

namespace lesson1;
require_once('Car.php');

class ElectricCar extends Car
{
    protected $batteryCapacity;

    public function __construct($brand, $model, $year, $batteryCapacity)
    {
        parent::__construct($brand, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function getBatteryInfo()
    {
        return 'Батарея: ' . $this->batteryCapacity . ' kWh';
    }
}

$tesla = new ElectricCar("Tesla", "Model S", 2021, 100);
echo $tesla->getBatteryInfo();

// ✅ "Батарея: 100 kWh"
