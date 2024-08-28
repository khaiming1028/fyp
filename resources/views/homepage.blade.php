<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="{{ asset('js/app.js') }}" defer></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>HONGHUAT MOTORS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Cars</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
          <a class = "btn btn-outline" href="{{route('view.wishlist')}}">
            <i class ="fa fa-shopping-cart" aria-hidden="true"></i>Wishlist <span class ="badge bg-danger">{{count((array) session('wishlist'))}}</span>
          </a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

  </header><!-- End Header -->


  </div>

  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Hong Huat Cars</h1>
          <h2>Explore a world of possibilities at Hong Huat Cars. We're your go-to destination for buying, selling, and more.
             With a diverse range of services, we make your car journey seamless.
              Trust us to fulfill all your automotive needs under one roof.</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/mainPic.jpeg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">About us</h3>
            <p data-aos="fade-up" data-aos-delay="100">
                With 40 years of experience we have became one of the most reputable used car dealership in Georgetown PENANG.
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Committed to Service</h4>
                <p>Founded in 1980 By Khoo Ah Tit, Hong Huat Cars is a valued Used Car Dealer in Penang. Our gorgeous showroom is home to the reasonable priced and like-new pre-owned vehicles. We’re committed to providing quality service to all of our customers, from first-time buyers to seasoned owners. Our financing options make it easy for everyone to buy the vehicle of their dreams.
                    Our professional and honest staff is ready to answer all of your questions, take you for a test drive,
                    and hand you the keys to your new vehicle! </p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>History HONG HUAT CARS:</h4>
                <p>Positioned as a premier used car dealership in Georgetown, Penang, HONG HUAT CARS has been a prominent figure since its establishment in 1980. Founded by MR. Khoo Ah Tit on Jalan Yeap Chor Ee Road, Penang, the business thrived until 2003 under his adept leadership.
                   In a seamless transition to its second generation, the business is now under the proficient management of MR. Khoo Khai Peng. The new showroom, situated at No: 84 & 86 Jalan Masjid Negeri 11600 (Greenlane), Penang, serves as a testament to their commitment.
                   Having accumulated four decades of invaluable experience, we have solidified our reputation as a trustworthy and esteemed used car dealership in Georgetown.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check out the great services we offer</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title">Reasonable and Affordable Pricing</h4>
              <p class="description">We Provide the Most Reasonable and Affordable Pricing in Penang Island and Prices are Negoatiable</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title">Reliability & Trustworthy</h4>
              <p class="description">Our Car are Guaranteed to be Free from Accident and Flood, Car are Serviced Regularly and Well Maintained Since Bought</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title">Patient and Efficient Staff</h4>
              <p class="description">Our staff will provide full explanation to customer for detailed understanding on the car</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title">Complete Car Detailing Service</h4>
              <p class="description">We provide full inspection on brakes/suspension/lower arms etc</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class = "container mt-4">
            @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            </div>
        </div>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cars</h2>
          <p>Check out our cars available!</p>
        </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-Sedan">Sedan</li>
            <li data-filter=".filter-SUV">SUV</li>
            <li data-filter=".filter-MPV">MPV</li>
            <li data-filter=".filter-Sport">Sport</li>
            <li data-filter=".filter-5door">5 Door</li>
            <li data-filter=".filter-3door">3 Door</li>          </ul>
        </div>
      </div>
      <button type="button" class="btn btn-primary  container" data-toggle="modal" data-target="#exampleModal">
        Compare Car
      </button>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Compare Car</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <select id="carDropdown" class="form-control">
                <option value="">Select first car</option>
                @foreach($cars as $car)
                <option value="{{ $car->id }}" data-type="{{ $car->type }}" data-brand="{{ $car->brand }}" data-name="{{ $car->name }}"  data-price="{{ $car->price }}" data-description="{{$car->description}}">
                     {{ $car->brand }} {{ $car->name }}
                @endforeach
              </select>

              <!-- Display selected car's data here -->
              <div id="selectedCarData">
                <p><strong>Type:</strong> <span id="selectedCarType"></span></p>
                <p><strong>Brand:</strong> <span id="selectedCarBrand"></span></p>
                <p><strong>Name:</strong> <span id="selectedCarName"></span></p>
                <p><strong>Price:</strong>  RM<span id="selectedCarPrice"></span></p>
                <p><strong>Color:</strong> <span id="selectedCarDescription"></span></p>

              </div>
              <hr>

              <div class="modal-body">
                <select id="carDropdown1" class="form-control">
                  <option value="">Select second car</option>
                  @foreach($cars as $car)
                  <option value="{{ $car->id }}" data-type="{{ $car->type }}" data-brand="{{ $car->brand }}" data-name="{{ $car->name }}"  data-price="{{ $car->price }}" data-description="{{$car->description}}">
                    {{ $car->brand }} {{ $car->name }}
                </option>
                  </option>
                  @endforeach
                </select>

                <!-- Display selected car's data here -->
                <div id="selectedCarData1">
                  <p><strong>Type:</strong> <span id="selectedCarType1"></span></p>
                  <p><strong>Brand:</strong> <span id="selectedCarBrand1"></span></p>
                  <p><strong>Name:</strong> <span id="selectedCarName1"></span></p>
                  <p><strong>Price: </strong> RM<span id="selectedCarPrice1"></span></p>
                  <p><strong>Color:</strong> <span id="selectedCarDescription1"></span></p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($cars as $car)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $car->type }}">
                    <div class="portfolio-wrap">
                    <img src="assets\car_img\{{ json_decode($car->image)[0] }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                        <a href="assets\car_img\{{ json_decode($car->image)[0] }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $car->description }}"><i class="bi bi-plus"></i></a>
                        <a href="{{ route('detail', $car->id) }}" title="More Details"><i class="bi bi-link"></i></a>
                    </div>
                    <div class="portfolio-info">
                        <h4>{{ $car->brand}} {{ $car->name }}</h4>
                        <p>RM{{ $car->price }}</p>
                    </div>
                    </div>
                    <div id="navbar" class="navbar">
                   <a class="getstarted scrollto" href="{{route('addcar.to.wishlist', $car->id)}}">Add To Wishlist</a>
                    </div>
                </div>
            @endforeach
        </div>

      </div>


    </section><!-- End Portfolio Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our team is always here to help</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="assets\img\team\khoo.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mr.Khoo</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="member">
              <img src="assets\img\team\nizam.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mr.Nizam</h4>
                  <span>Senior Salesman</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="member">
              <img src="assets\img\team\chin.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mr.Chin</h4>
                  <span>Senior Salesman</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    {{-- <section id="clients" class="clients section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Brands</h2>
          <p>They trusted us</p>
        </div>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section --> --}}

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us the get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>P19, 84, Jln Masjid Negeri, Taman Guan Joo Seng,
                    11600 Jelutong, Pulau Pinang</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>016-421 7777</p>
              </div>

              <<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1707117551014!2d100.29960471213825!3d5.390936435261638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac22b6ec59329%3A0x2da4d5d927cfdf09!2sHong%20Huat%20Motor%20Company%20%7C%20Jalan%20Masjid%20Negeri%20%7C%20Penang!5e0!3m2!1sen!2smy!4v1700480163344!5m2!1sen!2smy" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="{{route('contact_us_submit')}}" method="post" role="form">
                @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              {{-- <div class="my-3">
                <div class="loading" style="display: none;">Loading</div>
                <div class="error-message" style="display: none;"></div>
                <div class="sent-message" style="display: none;">Your message has been sent. Thank you!</div>
            </div> --}}
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  <script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>

  <script>
    $(document).ready(function() {
      $('#carDropdown, #carDropdown1').change(function() {
        var selectedCar = $('#carDropdown option:selected');
        var selectedCarType = selectedCar.data('type');
        var selectedCarBrand = selectedCar.data('brand');
        var selectedCarName = selectedCar.data('name');
        var selectedCarPrice = selectedCar.data('price');
        var selectedCarDescription = selectedCar.data('description');

        var selectedCar = $('#carDropdown1 option:selected');
        var selectedCarType1 = selectedCar.data('type');
        var selectedCarBrand1 = selectedCar.data('brand');
        var selectedCarName1 = selectedCar.data('name');
        var selectedCarPrice1 = selectedCar.data('price');
        var selectedCarDescription1 = selectedCar.data('description');


        $('#selectedCarType').text(selectedCarType);
        $('#selectedCarBrand').text(selectedCarBrand);
        $('#selectedCarName').text(selectedCarName);
        $('#selectedCarPrice').text(selectedCarPrice);
        $('#selectedCarDescription').text(selectedCarDescription);

        $('#selectedCarType1').text(selectedCarType1);
        $('#selectedCarBrand1').text(selectedCarBrand1);
        $('#selectedCarName1').text(selectedCarName1);
        $('#selectedCarPrice1').text(selectedCarPrice1);
        $('#selectedCarDescription1').text(selectedCarDescription1);
      });
    });
  </script>

<script>
    $(document).ready(function() {
        $('.php-email-form').submit(function(e) {
            e.preventDefault();

            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(response) {
                    $('.loading').hide();
                    if (response.success) {
                        $('.sent-message').show();
                        // Clear form fields if needed
                        form.trigger('reset');
                    } else {
                        $('.error-message').text('An error occurred while sending the message. Please try again.').show();
                    }
                },
                error: function() {
                    $('.loading').hide();
                    $('.error-message').text('An error occurred while sending the message. Please try again.').show();
                }
            });
        });
    });
</script>
</body>

</html>
