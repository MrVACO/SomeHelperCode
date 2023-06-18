<?php

declare(strict_types = 1);

namespace MrVaco\SomeHelperCode;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;

class SomeHelperCodeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Lang::addJsonPath(__DIR__ . '/../lang');
    }
}
