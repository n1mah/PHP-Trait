<?php
namespace Traits;

trait LoggerTrait
{
    public function log(string $message): void
    {
        echo date('[H:i:s] ') . $message . PHP_EOL;
    }
}
