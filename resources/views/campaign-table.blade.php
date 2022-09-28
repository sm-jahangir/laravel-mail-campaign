@extends('layouts.app')

@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
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
                  <td>{{ $campaign->title}}</td>
                  <td>{{ $campaign->scheduled_at }}</td>
                  <td>{{ $campaign->sended_at }}</td>
                  <td>{{ $campaign->status }}</td>
                  <td>
                    Delete
                  </td>
                </tr>
                @endforeach
              </tbody>
        </table>
      </div>
      
</div>
@endsection
