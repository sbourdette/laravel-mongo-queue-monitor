<?php

namespace sbourdette\MongoQueueMonitor\Tests\Support;

use sbourdette\MongoQueueMonitor\Traits\IsMonitored;

class MonitoredPartiallyKeptFailingJob extends BaseJob
{
    use IsMonitored;

    public static function keepMonitorOnSuccess(): bool
    {
        return false;
    }

    public function handle(): void
    {
        throw new IntentionallyFailedException('Whoops');
    }
}
