<?php

declare(strict_types = 1);

namespace MrVaco\SomeHelperCode\Enums;

use MrVaco\SomeHelperCode\Traits\StatusesTrait;

enum Status: int
{
    use StatusesTrait;
    
    case Protected = 0;
    case New = 1;
    case Draft = 2;
    case Disabled = 3;
    case Active = 4;
    
    public function trans(): string
    {
        return __($this->name);
    }
}
