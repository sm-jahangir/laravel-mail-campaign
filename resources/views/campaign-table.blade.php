@extends('layouts.app')

@section('content')
	<div class="container mt-5">

		<h2 class="text-center mb-4">Gmail Campaign</h2>
		<hr class="w-50 m-auto">
		<div class="d-flex justify-content-between">
			<div></div>
			<div>
				<a href="{{ route('gmail.campaign') }}" class="btn btn-success btn-lg">Create New Campaign</a>
				<a href="{{ route('campaign.export') }}" class="btn btn-warning btn-lg">Export Campaign</a>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Title</th>
						<th scope="col">Images</th>
						<th scope="col">scheduled_at</th>
						<th scope="col">sended_at</th>
						<th scope="col">status</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($campaigns as $campaign)
						<tr>
							<th scope="row">{{ $campaign->id }}</th>
							<td>{{ $campaign->title }}</td>
							<td>
								<img width="100" style="border-radius: 50%" src="{{ asset('storage/campaign') . '/' . $campaign->files }}" alt="">
							</td>
							<td>{{ $campaign->scheduled_at }}</td>
							<td>{{ $campaign->sended_at }}</td>
							<td>{{ $campaign->status }}</td>
							<td>

								<form method="POST" action="{{ route('campaign.stop', $campaign->id) }}">
									@csrf
									<button type="submit" class="btn btn-success btn-sm"> Stop Campaign</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

	</div>
@endsection
