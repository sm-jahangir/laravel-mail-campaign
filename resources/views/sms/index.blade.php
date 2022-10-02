@extends('layouts.app')

@section('content')
	<div class="container mt-5">
		<h2 class="text-center">SMS Campaign</h2>
		<hr class="w-50 m-auto">
		<div class="d-flex justify-content-between">
			<div></div>
			<div>
				<a href="{{ route('message.create') }}" class="btn btn-success btn-lg">Create New Campaign</a>
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
					@foreach ($messages as $message)
						<tr>
							<th scope="row">{{ $message->id }}</th>
							<td>{{ $message->subject }}</td>
							<td>{{ $message->scheduled_at }}</td>
							<td>{{ $message->sended_at }}</td>
							<td>{{ $message->status }}</td>
							{{-- <td>
                    <form action="{{ route('message.destroy', $message->id) }}" method="DELETE">
                      @csrf
                      <button class="btn btn-success btn-sm"> Delete</button>
                    </form>
                  </td> --}}

							<td>
								<div class="d-flex">
									<form method="POST" action="{{ route('message.destroy', $message->id) }}">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-success btn-sm"> Delete</button>
									</form>
									<form method="POST" action="{{ route('message.stop', $message->id) }}" class="ms-2">
										@csrf
										<button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Pause Your Campaign</button>
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
