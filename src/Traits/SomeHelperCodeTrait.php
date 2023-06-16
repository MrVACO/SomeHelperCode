<?php

declare(strict_types = 1);

namespace MrVaco\SomeHelperCode\Traits;

use ArchTech\Enums\Names;
use ArchTech\Enums\Values;

trait SomeHelperCodeTrait
{
    use Names, Values;
    
    public static function list(): array
    {
        return array_combine(self::values(), array_map(fn ($item): string => __($item), self::names()));
    }
}
