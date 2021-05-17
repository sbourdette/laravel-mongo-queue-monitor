<?php

namespace sbourdette\MongoQueueMonitor\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use sbourdette\MongoQueueMonitor\Models\MongoMonitorQueueModel;

class DeleteMonitorController
{
    public function __invoke(Request $request, MongoMonitorQueueModel $monitor)
    {
        $monitor->delete();

				if (($request->viewname) && (View::exists($request->viewname))) {
					$viewname = $request->viewname;
				}
				else {
					$viewname = '';
				}

        return redirect()->route('queue-monitor::index' , ['viewname' => $viewname]);
    }
}
