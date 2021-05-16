<?php

namespace sbourdette\MongoQueueMonitor\Components;

use Illuminate\View\Component;

class JobPurgeForm extends Component
{
		/**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('queue-monitor::components.job-purge-form');
    }
}
