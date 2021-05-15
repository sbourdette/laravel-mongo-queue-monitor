<?php

namespace sbourdette\MongoQueueMonitor\Tests;

use sbourdette\MongoQueueMonitor\Services\ClassUses;
use sbourdette\MongoQueueMonitor\Tests\Support\MonitoredExtendingJob;
use sbourdette\MongoQueueMonitor\Tests\Support\MonitoredJob;
use sbourdette\MongoQueueMonitor\Traits\IsMonitored;

class ClassUsesTraitTest extends TestCase
{
    public function testUsingMonitorTrait()
    {
        $this->assertArrayHasKey(
            IsMonitored::class,
            ClassUses::classUsesRecursive(MonitoredJob::class)
        );
    }

    public function testUsingMonitorTraitExtended()
    {
        $this->assertArrayHasKey(
            IsMonitored::class,
            ClassUses::classUsesRecursive(MonitoredExtendingJob::class)
        );
    }
}
