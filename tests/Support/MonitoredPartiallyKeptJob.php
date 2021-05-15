<?php

namespace sbourdette\MongoQueueMonitor\Tests\Support;

use sbourdette\MongoQueueMonitor\Traits\IsMonitored;

class MonitoredPartiallyKeptJob extends BaseJob
{
    use IsMonitored;

    public static function keepMonitorOnSuccess(): bool
    {
        return false;
    }
}
