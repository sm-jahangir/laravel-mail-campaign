@extends('layouts.app')

@section('content')
<div class="container">
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
                  <td>{{ $message->subject}}</td>
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
                    <form method="POST" action="{{ route('message.destroy',$message->id) }}">
                        @csrf
                        @method('DELETE')
                        {{-- <x-jet-danger-button
                            type="submit"
                            onclick="return confirm('Are you sure?')">Delete</x-jet-danger-button> --}}
                            <button type="submit" class="btn btn-success btn-sm"> Delete</button>
                    </form>
                </td>

                </tr>
                @endforeach
              </tbody>
        </table>
      </div>
      
</div>
@endsection
