<?php

namespace sbourdette\MongoQueueMonitor\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\View;

class JobsList extends Component
{
		public $jobs;
		public $viewname;

		/**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($jobs, String $viewname = null)
    {
			$this->jobs = $jobs;
			$this->viewname = View::exists($viewname) ? $viewname : null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('queue-monitor::components.jobs-list', ['viewname' => $this->viewname]);
    }
}
