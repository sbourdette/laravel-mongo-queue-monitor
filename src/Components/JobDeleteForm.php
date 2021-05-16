<?php

namespace sbourdette\MongoQueueMonitor\Components;

use Illuminate\View\Component;

class JobDeleteForm extends Component
{
		public $job;
		/**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($job)
    {
      $this->job = $job;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('queue-monitor::components.job-delete-form');
    }
}
