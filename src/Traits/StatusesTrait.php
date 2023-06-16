<?php

declare(strict_types = 1);

namespace MrVaco\SomeHelperCode\Traits;

use ArchTech\Enums\Names;
use ArchTech\Enums\Values;

trait StatusesTrait
{
    use Names;
    use Values;
    
    public static function list(): array
    {
        return array_combine(self::values(), self::names());
    }
}
