<?php

namespace Luilliarcec\Components;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('components')
            ->hasConfigFile('components')
            ->hasViews('components');
    }

    public function packageBooted()
    {
        Blade::componentNamespace('Luilliarcec\\Components\\Components', 'components');
    }
}
