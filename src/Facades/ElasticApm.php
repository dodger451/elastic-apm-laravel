<?php

namespace PhilKra\ElasticApmLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use PhilKra\AgentInterface;

class ElasticApm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AgentInterface::class;
    }
}
