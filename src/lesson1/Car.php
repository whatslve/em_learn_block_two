<?php

namespace lesson1;
use lesson1\Logger;

class Car implements Movable
{
    use Logger;
    private $brand;
    private $model;
    private $year;
    public function __construct($brand, $model, $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo(){
        return $this->brand.' '.$this->model.', '.$this->year;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function getYear(){
        return $this->year;
    }

    public function move(): void {
        echo 'Машина едет';
    }
}

$car = new Car("Toyota", "Camry", 2020);
//echo $car->getCarInfo();
//// ✅ "Toyota Camry, 2020"
//
//$car->setYear(2022);
//echo $car->getYear();
//// ✅ 2022
///
$car->log('Запущен двигатель');


