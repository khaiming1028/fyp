@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Edit a product</h1>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <form method="post" action="{{route('car.update',['car'=> $car])}}" enctype="multipart/form-data" class="my-form">
            @csrf
            @method('put')

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control" placeholder="Type">
            </div>

            <div class="form-group">
                <label>Brand</label>
                <input type="text" name="brand" class="form-control" placeholder="Brand" value="{{$car->brand}}">
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$car->name}}">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{$car->price}}">
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="Description" value="{{$car->description}}">
            </div>

            <div class="form-group">
                <label>Main Description</label>
                <textarea name="maindescription" class="form-control" placeholder="Main Description"  value="{{$car->maindescription}}">
                </textarea>
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image[]" class="form-control-file" multiple>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Image</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach(json_decode($car->image) as $index => $car_image)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="/assets/car_img/{{$car_image}}" alt="{{ $car_image }}" width="200px" height="200px"></td>
                            <td>
                                <button class="btn btn-sm btn-danger" type="button" onclick=deleteImg({{$index}})>Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="form-group">
                <input type="submit" value="Update Product" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script>
        function deleteImg(index){
            console.log(index);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url : "{{ route('cars.deleteImg') }}",
                data : {
                    '_token' : "{{csrf_token()}}",
                    'index': index,
                    'id': {{$car->id}}
                },
                type : 'POST',
                success : function(result){
                    console.log(result);
                    if(result.success){
                        alert(result.success);
                        location.reload();
                    }
                    else if(result.failed){
                        alert(result.failed);
                    }
                }
            });
        }
    </script>
@endsection
