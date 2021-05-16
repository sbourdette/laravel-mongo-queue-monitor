<?php

namespace sbourdette\MongoQueueMonitor\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use sbourdette\MongoQueueMonitor\Components\MetricCard;
use sbourdette\MongoQueueMonitor\Components\FiltersForm;
use sbourdette\MongoQueueMonitor\Components\JobsList;
use sbourdette\MongoQueueMonitor\Components\JobLine;
use sbourdette\MongoQueueMonitor\Components\JobDeleteForm;
use sbourdette\MongoQueueMonitor\Components\JobPurgeForm;

class MongoQueueMonitorComponentsProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

		public function boot()
		{
		    Blade::component('metric-card', MetricCard::class);
				Blade::component('filters-form', FiltersForm::class);
				Blade::component('jobs-list', JobsList::class);
				Blade::component('job-line', JobLine::class);
				Blade::component('job-delete-form', JobDeleteForm::class);
				Blade::component('job-purge-form', JobPurgeForm::class);
		}

		/**
		 * Register the application services.
		 *
		 * @return void
		 */
		public function register()
		{
		}
}
