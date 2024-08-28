<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Ninestars Bootstrap Template</title>
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

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Car Details</h2>
          <ol>
            <li><a href="{{ route('car.homepage') }}">Home</a></li>
            <li><a href="{{ route('portfolio-detail') }}">Portfolio</a></li>
            <li>Car Details</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                @foreach(json_decode($car->image) as $image)
                    <div class="swiper-slide">
                    <img src="{{ asset('assets/car_img/'.$image) }}" alt="">
                    </div>
                @endforeach
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Car information</h3>
              <ul>
                <li><strong>Type</strong>: {{ $car->type}}</li>
                <li><strong>Brand</strong>: {{ $car->brand}}</li>
                <li><strong>Name</strong>: {{ $car->name}}</li>
                <li><strong>Color</strong>: {{ $car->description}}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Details of {{$car->brand}} {{$car->name}}</h2>
              <pre>
                <p>
                {{$car->maindescription}}
              </p>
            </pre>

              <div>
                <h4>
                                 Contact us: 016421 7777
                </h4>
              </div>
              <div>
                <h4>
                    Our Showroom: P19, 84, Jln Masjid Negeri,
                    Taman Guan Joo Seng, 11600 Jelutong, Pulau Pinang
                </h4>

              </div>
            </div>
          </div>

        </div>


</div>

    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>HongHuat Motors</h3>
            <p>
                P19, 84, Jln Masjid Negeri, Taman Guan Joo Seng,
                11600 Jelutong, Pulau Pinang <br><br>
              <strong>Phone:</strong>016-421 7777<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/home" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/honghuatcars" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/honghuatcars/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>HongHuat Motors</span></strong>. All Rights Reserved
      </div>



    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
