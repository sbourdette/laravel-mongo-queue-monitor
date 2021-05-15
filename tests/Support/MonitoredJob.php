<?php

namespace sbourdette\MongoQueueMonitor\Tests\Support;

use sbourdette\MongoQueueMonitor\Traits\IsMonitored;

class MonitoredJob extends BaseJob
{
    use IsMonitored;
}
