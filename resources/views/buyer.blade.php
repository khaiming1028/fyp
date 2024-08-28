@extends('layouts.main')

@section('content')
@section('page_name', 'Buyer Listing')

<div class="container">


    <table border ="1" class="table table-bordered">
        <tr>
            <th>Buyer ID</th>
            <th>Buyer Name</th>
            <th>Buyer Contact</th>
            <th>Buyer Email</th>
            <th>Car Detail</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        @foreach ($buyers as $buyer)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$buyer ->name}}</td>
            <td>{{$buyer ->contact}}</td>
            <td>{{$buyer ->email}}</td>

            <td>
                <a href="{{ route('buyer.details', ['carId' => $buyer])}}">Detail</a>

            </td>
            <td>
                <a href="{{route('edit.buyer',['buyer' => $buyer])}}">Edit</a>
            </td>
            <td>
                <form method="post" action="{{route('destroy.buyer', ['buyer' => $buyer])}}">
                    @csrf
                    @method('delete')
                    <button type="submit" value="Delete" class="btn btn-danger btn-sm">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
    <br>

</div>


@endsection
