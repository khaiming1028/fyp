@extends('layouts.main')

@section('content')
<div class="container">
    @section('page_name', 'Buyer Details')

<table  border="1" class="table table-bordered">
    <tr>
        <td>Name: {{ $buyer->name }}</td>
        <td>Contact: {{ $buyer->contact }}</td>
        <td>Email: {{ $buyer->email }}</td>
    </tr>

</table>

    <h2>Associated Cars</h2>
    <table border="1" class="table table-bordered" action="{{route('buyer.details',['carId' =>$buyer->id])}}">
        <tr>
            <th>Type</th>
            <th>Car Name</th>
            <th>Price</th>
            <th>Color</th>

            <!-- Other Car Details -->
        </tr>
        <tr>
            <td>{{ $buyer->car->type }}</td>
            <td>{{ $buyer->car->brand }} {{ $buyer->car->name }}</td>
            <td>{{ $buyer->car->price }}</td>
            <td>{{ $buyer->car->description }}</td>

            <!-- Other Car Details -->
        </tr>

    </table>
</div>
@endsection
