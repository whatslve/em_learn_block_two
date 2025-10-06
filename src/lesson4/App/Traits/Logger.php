<?php
namespace App\Traits;

Trait Logger {
    public function log(string $message) : void {
        echo $message;
    }
}