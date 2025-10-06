<?php

namespace lesson3;
use Drawable;

require_once 'Shape.php';
require_once 'Drawable.php';
class Rectangle extends Shape implements Drawable
{
    private float $w;
    private float $h;

    public function __construct(float $w, float $h) {
        $this->w = $w;
        $this->h = $h;
    }

    public function getArea() : float {
        return $this->w * $this->h;
    }

    public function draw() : void {
        echo 'Рисую прямоугольник с шириной '. $this->w . ' высотой '. $this->h;
    }
}
