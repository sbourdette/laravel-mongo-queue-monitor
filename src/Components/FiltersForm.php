<?php

namespace sbourdette\MongoQueueMonitor\Components;

use Illuminate\View\Component;

class FiltersForm extends Component
{
		public $filters;
		public $queues;
		/**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($filters, $queues)
    {
      $this->filters = $filters;
			$this->queues = $queues;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('queue-monitor::components.filters-form');
    }
}
