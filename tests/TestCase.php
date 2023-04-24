<?php

namespace torgodly\Visitor\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use torgodly\Visitor\Tests\Mocks\Drivers\BarDriver;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return ['torgodly\Visitor\Provider\VisitorServiceProvider'];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Visitor' => 'torgodly\Visitor\Facade\Visitor',
        ];
    }
}
