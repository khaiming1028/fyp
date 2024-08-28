@extends('layouts.main')

@section('content')
<div class="container">
    @section('page_name', 'Car Listing')

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
            <th>Edit</th>
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
                <td><br>{{$car ->maindescription}}<br></td>
                <td>
                    @foreach(json_decode($car->image) as $car_image)
                        <img src="{{ asset('assets/car_img/'.$car_image) }}" style="height: 100px; width: 150px;">
                    @endforeach
                </td>
                    {{-- <td>{{$car ->image}}</td> --}}


                <td>
                    <a href="{{route('car.edit',['car' => $car])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('car.destroy', ['car' => $car])}}">
                        @csrf
                        @method('delete')
                        <button type="submit" value="Delete" class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </td>
                <td>
                    <button type="button" value="sold" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal{{$car->id}}">Sold</button>
                    <div class="modal fade" id="exampleModal{{$car->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Please Add Buyer that Bought the Car</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form method="post" action="{{ route('cars.sell', ['carId' => $car->id]) }}" enctype="multipart/form-data">

                                <div class="modal-body">
                                        @csrf
                                        @method('post')
                                        <div>
                                            <label >
                                                Buyer Name
                                            </label>
                                            <input type="text" name="name" placeholder="Buyer Name">
                                        </div>
                                        <div>
                                            <label >
                                                Buyer Contact
                                            </label>
                                            <input type="text" name="contact" placeholder="Buyer Contact">
                                        </div>
                                        <div>
                                            <label >
                                                Buyer Email
                                            </label>
                                            <input type="text" name="email" placeholder="Email">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="car_id" value="{{$car->id}}">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

    </table>
    <br>

    <a href="{{route('car.create')}}" class="btn btn-primary btn-sm mb-5">Add Car</a>
</div>
@endsection
