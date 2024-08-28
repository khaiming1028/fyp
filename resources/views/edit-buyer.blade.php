@extends('layouts.main')

@section('content')
    @section('page_name', 'Edit Buyer Listing')

    <div class="container">
        <h1>Edit Buyer Details</h1>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form method="post" action="{{route('update.buyer',['buyer'=>$buyer])}}" enctype="multipart/form-data" class="my-form">
            @csrf
            @method('put')
            <div class="form-group">
                <label>Buyer Name</label>
                <input type="text" name="name" class="form-control" placeholder="Buyer Name" value="{{$buyer->name}}">
            </div>
            <div class="form-group">
                <label>Buyer Contact</label>
                <input type="text" name="contact" class="form-control" placeholder="Buyer Contact" value="{{$buyer->contact}}">
            </div>
            <div class="form-group">
                <label>Buyer Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" value="{{$buyer->email}}">
            </div>
            <div class="form-group">
                <input type="submit" value="Update Buyer" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
