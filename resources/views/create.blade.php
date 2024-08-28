@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Create a product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="post" action="{{ route('car.store') }}" enctype="multipart/form-data" class="my-form">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" id="type" placeholder="Type" class="form-control">
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand" placeholder="Brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="brand">Name</label>
            <input type="text" name="name" id="brand" placeholder="Brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="brand">Price</label>
            <input type="text" name="price" id="brand" placeholder="Brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="brand">Description</label>
            <input type="text" name="description" id="brand" placeholder="Brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="brand">Main Description</label>
            <input type="text" name="maindescription" id="brand" placeholder="Brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image[]" id="image" multiple class="form-control-file">
        </div>
        <div class="form-group">
            <input type="submit" value="Save Car" class="btn btn-primary">
        </div>
    </form>
</div>

<style>
    .container {
        margin-top: 20px;
    }

    .my-form {
        max-width: 500px;
        margin: auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-control-file {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        color: #fff;
    }

    .btn-primary {
        background-color: #007bff;
    }
</style>

@endsection
