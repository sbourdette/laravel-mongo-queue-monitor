<?php

namespace sbourdette\MongoQueueMonitor\Controllers;

use Illuminate\Http\Request;
use sbourdette\MongoQueueMonitor\Models\MongoMonitorQueueModel;

class DeleteMonitorController
{
    public function __invoke(Request $request, MongoMonitorQueueModel $monitor)
    {
        $monitor->delete();

        return redirect()->route('queue-monitor::index');
    }
}
