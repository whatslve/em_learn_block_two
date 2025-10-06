<?php

namespace lesson3;
require_once 'Circle.php';
require_once  'Rectangle.php';
class RenderShape
{
    private Shape $shape;
    public function __construct(Shape $shape) {
      $this->shape = $shape;
      $this->render();
    }
    public function render(): void
    {
        $this->shape->getArea();
    }
}