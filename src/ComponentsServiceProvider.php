<?php

namespace Luilliarcec\Components;

use Luilliarcec\Components\View\Components\Button;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('components')
            ->hasConfigFile('components')
            ->hasViewComponents('components', [
                Button::class,
            ])
            ->hasViews('components');
    }
}
