<?php

namespace Luilliarcec\Components;

use Luilliarcec\Components\Components\Button;
use Luilliarcec\Components\Components\IconButton;
use Luilliarcec\Components\Components\Link;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('components')
            ->hasConfigFile('components')
            ->hasViewComponents('components', Link::class, Button::class, IconButton::class)
            ->hasViews('components');
    }
}
