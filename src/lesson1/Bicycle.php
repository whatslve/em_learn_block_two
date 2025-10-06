<?php

namespace lesson1;

class Bicycle implements Movable
{
    public function move(): void {
        echo 'Велосипед движется';
    }
}