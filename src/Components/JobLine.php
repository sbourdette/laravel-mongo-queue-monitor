<?php

namespace sbourdette\MongoQueueMonitor\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\View;

class JobLine extends Component
{
		public $job;
		public $allowDeletion;
		public $viewname;

		/**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($job, $allowDeletion, String $viewname = null)
    {
      $this->job = $job;
			$this->allowDeletion = $allowDeletion;
			$this->viewname = View::exists($viewname) ? $viewname : null;
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
