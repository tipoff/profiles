<?php

declare(strict_types=1);

namespace Tipoff\Profiles\Tests;

use Laravel\Nova\NovaCoreServiceProvider;
use Tipoff\Profiles\ProfilesServiceProvider;
use Tipoff\Profiles\Tests\Support\Providers\NovaTestbenchServiceProvider;
use Tipoff\Locations\LocationsServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            NovaCoreServiceProvider::class,
            NovaTestbenchServiceProvider::class,
            ProfilesServiceProvider::class,
            SupportServiceProvider::class,
            LocationsServiceProvider::class,
        ];
    }
}