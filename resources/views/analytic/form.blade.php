@extends('layouts.app')
@section('content')
	<div class="container">
		<form method="POST" action="{{ route('analytic.store') }}">
			@csrf
			<div class="card-body">
				<div class="form-group">
					<label for="body">Google Analytics Code</label>
					<textarea class="form-control" name="code" id="body" rows="3">{{ $posts->code }}</textarea>
				</div>
			</div>
			<div class="card-footer text-muted">
				<button type="submit" class="btn btn-primary">Added</button>
			</div>
		</form>
	</div>
@endsection
