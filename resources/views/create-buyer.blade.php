@extends('layouts.main')

@section('content')
@section('page_name', 'Creat Buyer Listing')


<div class="container">

    <div class="container">
        <h1>Create Buyer Details</h1>
        <div>
            @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>

            @endif
        </div>
        <form method="post" action="{{route('store.buyer')}}" enctype="multipart/form-data">
            @csrf
            @method('post')
    <div>
        <label >
            Buyer Name
        </label>
        <input type="text" name="name" placeholder="Buyer Name">
    </div>
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
    <div>
        <input type="submit" value="Save Buyer"/>
    </div>
        </form>
    </div>

</div>


@endsection
