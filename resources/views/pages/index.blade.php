@extends('layouts.app')
@section('content')
	<div class="container mt-5">
		<h2 class="text-center">Pages List</h2>
		<hr class="w-50 m-auto">
		<div class="d-flex justify-content-between">
			<div></div>
			<div>
				<a href="{{ route('page.create') }}" class="btn btn-success btn-lg">Create New Page</a>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Subject</th>
						<th scope="col">scheduled_at</th>
						<th scope="col">sended_at</th>
						<th scope="col">status</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($pages as $page)
						<tr>
							<th scope="row">{{ $page->id }}</th>
							<td>{{ $page->title }}</td>
							<td>
								<img width="120" src="{{ asset('storage/page') . '/' . $page->image }}" alt="Pages Image">
							</td>
							<td>{{ $page->created_at }}</td>
							<td>{{ $page->status }}</td>
							<td>
								<div class="d-flex">
									<form method="POST" action="{{ route('page.destroy', $page->id) }}">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-success btn-sm"> Delete</button>
									</form>

								</div>
							</td>

						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

	</div>
@endsection
