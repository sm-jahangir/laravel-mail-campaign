@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('campaign.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="greeting">Greeting</label>
                <input type="greeting"
                  class="form-control @error('greeting') is-invalid @enderror" name="greeting" id="greeting" placeholder="Enter Your greeting">
                  @error('greeting')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="title"
                  class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter Your title">
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="subject"
                  class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Enter Your subject">
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
        
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary">Added</button>
        </div>
    </form>
</div>
@endsection
