<?php
trait Logger {
    public function log(string $message): void {
        echo '[LOG]: ' . $message . PHP_EOL;
    }
}