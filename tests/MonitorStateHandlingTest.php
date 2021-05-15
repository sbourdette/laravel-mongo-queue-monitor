<?php

namespace sbourdette\MongoQueueMonitor\Tests;

use sbourdette\MongoQueueMonitor\Models\Monitor;
use sbourdette\MongoQueueMonitor\Services\QueueMonitor;
use sbourdette\MongoQueueMonitor\Tests\Support\IntentionallyFailedException;
use sbourdette\MongoQueueMonitor\Tests\Support\MonitoredFailingJob;
use sbourdette\MongoQueueMonitor\Tests\Support\MonitoredFailingJobWithHugeExceptionMessage;

class MonitorStateHandlingTest extends TestCase
{
    public function testFailing()
    {
        $this->dispatch(new MonitoredFailingJob());
        $this->workQueue();

        $this->assertCount(1, Monitor::all());
        $this->assertInstanceOf(Monitor::class, $monitor = Monitor::query()->first());
        $this->assertEquals(MonitoredFailingJob::class, $monitor->name);
        $this->assertEquals(IntentionallyFailedException::class, $monitor->exception_class);
        $this->assertEquals('Whoops', $monitor->exception_message);
        $this->assertInstanceOf(IntentionallyFailedException::class, $monitor->getException());
    }

    public function testFailingWithHugeExceptionMessage()
    {
        $this->dispatch(new MonitoredFailingJobWithHugeExceptionMessage());
        $this->workQueue();

        $this->assertCount(1, Monitor::all());
        $this->assertInstanceOf(Monitor::class, $monitor = Monitor::query()->first());
        $this->assertEquals(MonitoredFailingJobWithHugeExceptionMessage::class, $monitor->name);
        $this->assertEquals(IntentionallyFailedException::class, $monitor->exception_class);
        $this->assertEquals(str_repeat('x', QueueMonitor::MAX_BYTES_TEXT), $monitor->exception_message);
        $this->assertInstanceOf(IntentionallyFailedException::class, $monitor->getException());
    }
}
