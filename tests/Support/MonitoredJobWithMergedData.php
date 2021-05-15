<?php

namespace sbourdette\MongoQueueMonitor\Tests\Support;

use sbourdette\MongoQueueMonitor\Traits\IsMonitored;

class MonitoredJobWithMergedData extends BaseJob
{
    use IsMonitored;

    public function handle(): void
    {
        $this->queueData([
            'foo' => 'foo',
        ]);

        $this->queueData([
            'bar' => 'bar',
        ], true);
    }
}
