<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wish List</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}})" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <script src="{{asset('https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js')}}"></script>
  <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js')}}"></script>

  <!-- =======================================================
  * Template Name: Ninestars
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>HONGHUAT</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('car.homepage') }}#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('car.homepage') }}#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="{{route('car.homepage')}}#services">Services</a></li>
          <li><a class="nav-link scrollto" href="{{route('car.homepage')}}#portfolio">Cars</a></li>
          <li><a class="nav-link scrollto" href="{{route('car.homepage')}}#team">Team</a></li>
          <li><a class="nav-link scrollto" href="{{route('car.homepage')}}#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{route('car.homepage')}}#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Wish List</h2>
            <ol>
              <li><a href="{{ route('car.homepage') }}">Home</a></li>
              <li><a href="{{ route('portfolio-detail') }}">Portfolio</a></li>
              <li>Wishlist </li>
            </ol>
          </div>

        </div>
      </section><!-- Breadcrumbs Section -->

    <section class="container d-flex align-items-center">
        <table id = "wishlist" class="table table-bordered ">
            <thead><tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Color</th>
                <th>Delete</th>


            </tr>
        </thead>
        <tbody>
            @if(session('wishlist'))
            @foreach ( session('wishlist') as $id=>$details )
                <tr rowId="{{$id}}">
                    <td data-th = "car">
                        <div class = "row">
                            <div class = "col-sm-3 hidden-xs">
                                 <img src= "{{asset('assets/car_img/')}}/{{json_decode($details['image'])[0]}}" class = "card-img-top">
                                </div>
                        </td>
                                <td>
                                    <div class="col-sm-9">
                                    <h4 class="nomargin">{{$details['brand']}} {{$details['name']}}</h4></td>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{$details['price']}}</td>
                    <td>
                        <h4 class="nomargin">{{$details['description']}}</h4></td>
                        </td>
                    <td class="actions">
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick=delete_product({{$id}})>
                            <i class="fa fa-trash-o"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            @endif
        </tbody>
        </table>
    </section>
</body>

<script>
    function delete_product(id){
        if(confirm('Do you really want to delete?')){
            $.ajax({
                url: '{{ route('delete.wishlist') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    }
</script>
