<?php

declare(strict_types=1);

namespace Blog\Framework;

class Autoload
{
    public function autoload($class)
    {
        require_once '../src/' . str_replace('\\','/', $class) . '.php';

    }
}