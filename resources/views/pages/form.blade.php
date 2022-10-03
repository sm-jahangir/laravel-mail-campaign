@extends('layouts.app')
@section('content')
	<div class="container">
		<form method="POST" action="{{ route('page.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">

				<div class="form-group">
					<label for="title">Title</label>
					<input type="title" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter Your title">
					@error('title')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $body }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="body">body</label>
					<textarea class="form-control" name="body" id="body" rows="3"></textarea>
				</div>
				<div class="row my-3">
					<div class="col-md-6">
						<label for="status">Status Select</label>
						<select name="status" class="form-select" aria-label="Default select example">
							<option value="0">PENDING</option>
							<option selected value="1">Publish</option>
						</select>
					</div>
					<div class="col-md-6">
						<div class="">
							<label for="formFileSm" class="form-label">file input</label>
							<input name="image" class="form-control form-control-sm" id="formFileSm" type="file">
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer text-muted">
				<button type="submit" class="btn btn-primary">Added</button>
			</div>
		</form>
	</div>
@endsection
