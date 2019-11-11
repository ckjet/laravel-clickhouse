<?php

declare(strict_types=1);

namespace ItStably\LaravelClickHouse\Tests;

use Mockery;
use Faker\Factory;
use Faker\Generator;

trait Helpers
{
    protected function mock(string $abstract): Mockery\MockInterface
    {
        return Mockery::mock($abstract);
    }

    protected function faker(): Generator
    {
        return Factory::create();
    }
}
