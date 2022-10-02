@extends('layouts.app')

@section('content')
	<div class="container">
		<form method="POST" action="{{ route('campaign.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<div class="form-group">
					<label for="greeting">Greeting</label>
					<input type="greeting" class="form-control @error('greeting') is-invalid @enderror" name="greeting" id="greeting" placeholder="Enter Your greeting">
					@error('greeting')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="title">Title</label>
					<input type="title" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter Your title">
					@error('title')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<input type="subject" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Enter Your subject">
					@error('subject')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" name="message" id="message" rows="3"></textarea>
				</div>
				<div class="row my-3">
					<div class="col-md-6">
						<div class="form-group">
							<label for="meeting-time">Date</label>
							<input type="datetime-local" id="meeting-time" name="scheduled_at" value="2018-06-12T19:30" class="form-control" min="2018-06-07T00:00" max="2025-06-14T00:00">
						</div>
					</div>
					<div class="col-md-6">
						<label for="status">Status Select</label>
						<select name="status" class="form-select" aria-label="Default select example">
							<option selected>Select Status</option>
							<option value="PENDING">PENDING</option>
							<option value="SENT">SENT</option>
						</select>
					</div>
				</div>
				<div class="row border p-2">
					<div class="custom-file">
						<input type="file" name="files" class="custom-file-input" id="inputGroupFile01">
						<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
					</div>
				</div>
			</div>
			<div class="card-footer text-muted">
				<button type="submit" class="btn btn-primary">Added</button>
			</div>
		</form>
	</div>
@endsection
