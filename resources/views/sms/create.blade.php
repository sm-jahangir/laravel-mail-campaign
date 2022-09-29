@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('message.store') }}">
        @csrf
        <div class="card-body">
     
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
           <div class="row my-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="meeting-time">Date</label>
                    <input type="datetime-local" id="meeting-time"
                    name="scheduled_at" value="2018-06-12T19:30"
                    class="form-control"
                    min="2018-06-07T00:00" max="2025-06-14T00:00">
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
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary">Added</button>
        </div>
    </form>
</div>
@endsection
