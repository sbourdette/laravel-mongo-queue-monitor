<?php

namespace sbourdette\MongoQueueMonitor\Routes;

use Closure;

class MongoQueueMonitorRoutes
{
    /**
     * Scaffold the Queue Monitor UI routes.
     *
     * @return \Closure
     */
    public function queueMonitor(): Closure
    {
        return function (array $options = []) {
            /** @var \Illuminate\Routing\Router $this */

						$this->redirect('', 'index');

						$this->get('index/{view?}', '\sbourdette\MongoQueueMonitor\Controllers\ShowQueueMonitorController')->name('queue-monitor::indexview');

            if (config('queue-monitor.ui.allow_deletion')) {
                $this->delete('monitors/{monitor}', '\sbourdette\MongoQueueMonitor\Controllers\DeleteMonitorController')->name('queue-monitor::destroy');
            }

            if (config('queue-monitor.ui.allow_purge')) {
                $this->delete('purge', '\sbourdette\MongoQueueMonitor\Controllers\PurgeMonitorsController')->name('queue-monitor::purge');
            }
        };
    }
}
