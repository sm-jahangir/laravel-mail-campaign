<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body class="container">
        <div>
            <ul class="nav navbar">
                <li class="nav-link"> <a class="text-decoration-none" href="{{ route('campaign.index') }}">Mail Campaign</a></li>
                <li class="nav-link"> <a class="text-decoration-none" href="{{ route('message.index') }}">Message Campaign</a></li>
            </ul>
           
            



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
                          <td>{{ $user->name}}</td>
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
        </div>
    </body>
</html>
