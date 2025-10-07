<?php

namespace lesson3;
use lesson3\Drawable;
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
        echo 'Рисую прямоугольник шириной '. $this->w . ' высотой '. $this->h;
    }
}
