@extends('layouts.main')

@section('content')
<div class="container">
    @section('page_name', 'Sold Listing')

    @if (session()->has('success'))
        <div>
            {{session('success')}}
        </div>
    @endif

    <table border ="1" class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Brand</th>
            <th>Car Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Main Description</th>
            <th>Image</th>
            <th>Delete</th>


        </tr>

        @foreach ($cars as $car)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$car ->type}}</td>
                <td>{{$car ->brand}}</td>
                <td>{{$car ->name}}</td>
                <td>{{$car ->price}}</td>
                <td>{{$car ->description}}</td>
                <td>{{$car ->maindescription}}</td>
                <td>
                    @foreach(json_decode($car->image) as $car_image)
                        <img src="{{ asset('assets/car_img/'.$car_image) }}" style="height: 100px; width: 150px;">
                    @endforeach
                </td>
                    {{-- <td>{{$car ->image}}</td> --}}


                <td>
                    <form method="post" action="{{route('car.destroy', ['car' => $car])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" value="Delete" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <br>

    <a href="{{route('car.create')}}" class="btn btn-primary btn-sm mb-5">Add Car</a>
</div>
@endsection
