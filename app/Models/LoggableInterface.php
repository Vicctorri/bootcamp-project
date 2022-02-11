<?php

namespace App\Models;

interface LoggableInterface
{
    // get loggable type for messsage generation
    public function convertToLoggableString(): string;

    // get loggable obect data for for log context
    public function getData(): array;
}