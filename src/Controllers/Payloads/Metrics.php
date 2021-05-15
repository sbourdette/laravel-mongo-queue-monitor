<?php

namespace sbourdette\MongoQueueMonitor\Controllers\Payloads;

final class Metrics
{
    /**
     * @var \sbourdette\MongoQueueMonitor\Controllers\Payloads\Metric[]
     */
    public $metrics = [];

    /**
     * @return \sbourdette\MongoQueueMonitor\Controllers\Payloads\Metric[]
     */
    public function all(): array
    {
        return $this->metrics;
    }

    public function push(Metric $metric): self
    {
        $this->metrics[] = $metric;

        return $this;
    }
}
