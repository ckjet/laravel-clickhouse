<?php

declare(strict_types=1);

namespace Ckjet\LaravelClickHouse\Tests\Database;

use PHPUnit\Framework\TestCase;
use Ckjet\LaravelClickHouse\Database\Connection;
use Ckjet\LaravelClickHouse\Database\Query\Builder;

class ConnectionTest extends TestCase
{
    public function testQuery()
    {
        $connection = new Connection(['host' => 'localhost']);

        $this->assertInstanceOf(Builder::class, $connection->query());
    }
}
