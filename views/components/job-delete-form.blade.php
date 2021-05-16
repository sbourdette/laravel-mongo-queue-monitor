@if ($job->isFinished())
	<form action="{{ route('queue-monitor::destroy', [$job]) }}" method="post">
			@csrf
			@method('delete')
			<button class="px-3 py-1 bg-red-200 hover:bg-red-300 text-red-800 text-xs font-medium uppercase tracking-wider text-white rounded">
					Delete
			</button>
	</form>
@endif
