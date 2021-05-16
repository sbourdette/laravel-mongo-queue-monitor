<div class="px-6 py-4 mb-6 pl-4 bg-white rounded-md shadow-md">
		<h2 class="mb-4 text-2xl font-bold text-blue-900">
				Filter
		</h2>
		<form action="" method="get">
				<div class="flex items-center my-2 -mx-2">
						<div class="px-2 w-1/4">
								<label for="filter_show" class="block mb-1 text-xs uppercase font-semibold text-gray-600">
										Show jobs
								</label>
								<select name="type" id="filter_show" class="w-full p-2 bg-gray-200 border-2 border-gray-300 rounded">
										<option @if($filters['type'] === 'all') selected @endif value="all">All</option>
										<option @if($filters['type'] === 'pending') selected @endif value="pending">Pending</option>
										<option @if($filters['type'] === 'running') selected @endif value="running">Running</option>
										<option @if($filters['type'] === 'failed') selected @endif value="failed">Failed</option>
										<option @if($filters['type'] === 'succeeded') selected @endif value="succeeded">Succeeded</option>
								</select>
						</div>
						<div class="px-2 w-1/4">
								<label for="filter_queues" class="block mb-1 text-xs uppercase font-semibold text-gray-600">
										Queues
								</label>
								<select name="queue" id="filter_queues" class="w-full p-2 bg-gray-200 border-2 border-gray-300 rounded">
										<option value="all">All</option>
										@foreach($queues as $queue)
												<option @if($filters['queue'] === $queue) selected @endif value="{{ $queue }}">
														{{ $queue }}
												</option>
										@endforeach
								</select>
						</div>
				</div>
				<div class="mt-4">
						<button type="submit" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-xs font-medium uppercase tracking-wider text-white rounded">
								Filter
						</button>
				</div>
		</form>
</div>
