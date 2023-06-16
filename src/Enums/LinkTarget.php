<?php

declare(strict_types = 1);

namespace MrVaco\SomeHelperCode\Enums;

use MrVaco\SomeHelperCode\Traits\SomeHelperCodeTrait;

enum LinkTarget: string
{
    use SomeHelperCodeTrait;
    
    case Self = '_self';
    case Blank = '_blank';
    case Parent = '_parent';
    case Top = '_top';
    
    public function trans(): string
    {
        return __($this->name);
    }
}
