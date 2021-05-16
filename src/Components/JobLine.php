<?php

namespace sbourdette\MongoQueueMonitor\Components;

use Illuminate\View\Component;

class JobLine extends Component
{
		public $job;
		public $allowDeletion;

		/**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($job, $allowDeletion)
    {
      $this->job = $job;
			$this->allowDeletion = $allowDeletion;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('queue-monitor::components.job-line');
    }
}
