<div class="overflow-x-auto shadow-lg">
		<table class="w-full rounded whitespace-no-wrap">
				<thead class="bg-gray-200">
						<tr>
								<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Status</th>
								<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Job</th>
								<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Details</th>
								@if(config('queue-monitor.ui.show_custom_data'))
										<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Custom Data</th>
								@endif
								<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Progress</th>
								<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Queued</th>
								<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Duration</th>
								<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Started</th>
								<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Error</th>
								@if(config('queue-monitor.ui.allow_deletion'))
										<th class="px-4 py-3 font-medium text-left text-xs text-gray-600 uppercase border-b border-gray-200">Action</th>
								@endif
						</tr>
				</thead>
				<tbody class="bg-white">
						@forelse($jobs as $job)
							<x-job-line :job="$job" :allowDeletion="config('queue-monitor.ui.allow_deletion')" :viewname="$viewname"></x-job-line>
						@empty
								<tr>
										<td colspan="100" class="">
												<div class="my-6">
														<div class="text-center">
																<div class="text-gray-500 text-lg">
																		No Jobs
																</div>
														</div>
												</div>
										</td>
								</tr>
						@endforelse
				</tbody>
				<tfoot class="bg-white">
						<tr>
								<td colspan="100" class="px-6 py-4 text-gray-700 font-sm border-t-2 border-gray-200">
										<div class="flex justify-between">
												<div>
														Showing
														@if($jobs->total() > 0)
																<span class="font-medium">{{ $jobs->firstItem() }}</span> to
																<span class="font-medium">{{ $jobs->lastItem() }}</span> of
														@endif
														<span class="font-medium">{{ $jobs->total() }}</span> result
												</div>
												<div>
														<a class="py-2 px-4 mx-1 text-xs font-medium @if(!$jobs->onFirstPage()) bg-gray-200 hover:bg-gray-300 cursor-pointer @else text-gray-600 bg-gray-100 cursor-not-allowed @endif rounded"
															 @if(!$jobs->onFirstPage()) href="{{ $jobs->previousPageUrl() }}" @endif>
																Previous
														</a>
														<a class="py-2 px-4 mx-1 text-xs font-medium @if($jobs->hasMorePages()) bg-gray-200 hover:bg-gray-300 cursor-pointer @else text-gray-600 bg-gray-100 cursor-not-allowed @endif rounded"
															 @if($jobs->hasMorePages()) href="{{ $jobs->url($jobs->currentPage() + 1) }}" @endif>
																Next
														</a>
												</div>
										</div>
								</td>
						</tr>
				</tfoot>
		</table>
</div>
