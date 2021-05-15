<?php

namespace sbourdette\MongoQueueMonitor\Controllers;

use Illuminate\Http\Request;
use sbourdette\MongoQueueMonitor\Models\Contracts\MonitorContract;
use sbourdette\MongoQueueMonitor\Services\QueueMonitor;

class PurgeMonitorsController
{
    public function __invoke(Request $request)
    {
        $model = QueueMonitor::getModel();

        $model->newQuery()->each(function (MonitorContract $monitor) {
            $monitor->delete();
        }, 200);

        return redirect()->route('queue-monitor::index');
    }
}
