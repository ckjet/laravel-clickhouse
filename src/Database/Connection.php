<?php

declare(strict_types=1);

namespace ItStably\LaravelClickHouse\Database;

use ItStably\ClickhouseBuilder\Query\Grammar;
use ItStably\LaravelClickHouse\Database\Query\Builder;

class Connection extends \ItStably\ClickhouseBuilder\Integrations\Laravel\Connection
{
    public function query()
    {
        return new Builder($this, new Grammar());
    }
}
