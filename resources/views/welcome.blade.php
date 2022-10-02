@extends('layouts.app')
@section('content')
	<div class="container">

		<h2 class="text-center mb-4">ALL USERS</h2>
		<hr class="w-50 m-auto">
		<div class="table-responsive mt-5">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Name</th>
						<th scope="col">Number</th>
						<th scope="col">Created At</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
						<tr>
							<th scope="row">{{ $user->id }}</th>
							<td>{{ $user->name }}</td>
							<td>{{ $user->phone }}</td>
							<td>{{ $user->created_at->diffForHumans() }}</td>
							<td>
								{{-- <form method="POST" action="{{ route('user.destroy',$user->id) }}">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-success btn-sm"> Delete</button>
                            </form> --}}
								<button type="submit" class="btn btn-success btn-sm"> Delete</button>
							</td>

						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
