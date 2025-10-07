<?php
namespace lesson1;
trait Logger {
    public function log(string $message): void {
        echo '[LOG]: ' . $message . PHP_EOL;
    }
}