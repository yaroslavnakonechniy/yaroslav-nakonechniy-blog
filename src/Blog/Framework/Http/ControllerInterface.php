<?php

namespace Blog\Framework\Http;

interface ControllerInterface
{
    public function execute(): string;

}