<?php

namespace lesson3;
use lesson3\Drawable;
class Circle extends Shape implements Drawable
{
    private float $r;

    public function __construct(float $r) {
        $this->r = $r;
    }

    public function getArea() : float {
        return M_PI * ($this->r ** 2);
    }
    public function draw() : void {
        echo 'Рисую круг радиусом '. $this->r;
    }
}
