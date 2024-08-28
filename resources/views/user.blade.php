@extends('layouts.main')

@section('content')
<div class="container">


    <table border ="1" class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>User Name</th>
            <th>User Email</th>
            <th>User Subject</th>
            <th>User Message</th>
            <th>Delete</th>
        </tr>

        @foreach ($users as $user)
         <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$user ->name}}</td>
            <td>{{$user ->email}}</td>
            <td>{{$user ->subject}}</td>
            <td>{{$user ->message}}</td>

            <td>

    <form method="post" action="{{route('destroy.user', ['user' => $user])}}">
        @csrf
        @method('delete')
        <button type="submit" value="Delete" class="btn btn-danger btn-sm">Delete</button>
            </td>
        </tr>
      @endforeach
    </table>
</div>

@endsection
