<?php

namespace sbourdette\MongoQueueMonitor\Components;

use Illuminate\View\Component;

use sbourdette\MongoQueueMonitor\Controllers\Payloads\Metric;

class MetricCard extends Component
{
		public $metric;
		/**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Metric $metric)
    {
      $this->metric = $metric;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('queue-monitor::components.metric-card');
    }
}
