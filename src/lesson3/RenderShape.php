<?php

namespace lesson3;
function RenderShape(Shape $shape) : Void {
     $shape->draw();
     echo PHP_EOL;
     echo 'Площадь: ' . $shape->getArea();
}