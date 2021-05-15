<?php

namespace sbourdette\MongoQueueMonitor\Tests\Support;

use sbourdette\MongoQueueMonitor\Traits\IsMonitored;

class MonitoredJobWithArguments extends BaseJob
{
    use IsMonitored;

    public $first;

    public function __construct(string $first)
    {
        $this->first = $first;
    }
}
