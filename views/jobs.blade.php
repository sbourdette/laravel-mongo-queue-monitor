<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mongo Queue Monitor</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans p-6 pb-64 bg-gray-100">
    <h1 class="mb-6 text-5xl text-blue-900 font-bold">
        Mongo Queue Monitor
    </h1>
		@if(config('queue-monitor.ui.show_metrics'))
	    @isset($metrics)
	      <div class="flex flex-wrap -mx-4 mb-2">
	        @foreach($metrics->all() as $metric)
						<x-metric-card :metric="$metric"></x-metric-card>
	        @endforeach
	      </div>
	    @endisset
		@endif
		<x-filters-form :filters="$filters" :queues="$queues"></x-filters-form>
		<x-jobs-list :jobs="$jobs"></x-jobs-list>
    @if(config('queue-monitor.ui.allow_purge'))
			<x-job-purge-form></x-job-purge-form>
		@endif
</body>
</html>
