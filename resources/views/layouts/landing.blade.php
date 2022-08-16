<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @yield('title')
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon-32x32.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  <script src="https://kit.fontawesome.com/a796f0c56e.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/owl.theme.default.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/header.css')}}">

  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  @yield('css')

</head>

<body>
  <!-- ====== status bar Start ======== -->
  <div class="container-fluid">
    <div class="row status_bar
     py-2 ">
        <div class="col-md-6 col-12 d-flex justify-content-start status-bar-left">
            <li>Contact</li>
            <li><i class="fas fa-envelope"></i></li>
            <li>dhaka.choice@gmail.com</li>
        </div>
        <div class="col-md-6 col-12 d-flex justify-content-end status-bar-right ">
            <p class="follow_us ">Follow Us</p>
            <a class="link" href=""><i class="fab fa-facebook"></i></a>
            <a class="link" href=""><i class="fab fa-twitter"></i></a>
            <a class="link" href=""><i class="fab fa-instagram"></i></a>
            <a class="link" href=""><i class="fab fa-youtube"></i></a>
            <a class="link" href=""><i class="fab fa-skype"></i></a>
            <a class="link" href=""><i class="fab fa-whatsapp"></i></a>
                <style>
                    .goog-te-banner-frame.skiptranslate, .goog-te-gadget-icon {
                        display: none !important;
                    }
                    body {
                        top: 0px !important;
                    }
                    .goog-tooltip {
                        display: none !important;
                    }
                    .goog-tooltip:hover {
                        display: none !important;
                    }
                    .goog-text-highlight {
                        background-color: transparent !important;
                        border: none !important;
                        box-shadow: none !important;
                    }
                </style>
                <div id="google_translate_element"></div>
                <script>
                    function googleTranslateElementInit() {
                        var translator = new google.translate.TranslateElement({
                            pageLanguage: 'en',
                            includedLanguages: 'en,bn',
                            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                        }, 'google_translate_element');
                    }
                </script>
                <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>
    </div>
</div>

<!-- ========= category slider start ========= -->
   <!-- Image Category Slider Start -->
   <div class="container-fluid mt-2">
    <div class="row my-2">
        <div class="col-md-2 col-4 logo_body">
            <div class="col-3 nav-logo">
                <img src="./assets/img/category_slide_bar/logo.png" alt="" class="image-fluide">
            </div>
        </div>
        <div class="col-md-10 col-8">
            <div class="owl-carousel owl-theme">
                <div class="item ">
                    <div class="card border-0 " style="width: 70%; margin: auto;">
                        <img style="border-radius: 50%; width: 100px; height:100px" src="./assets/img/category_slide_bar/cloth_store.png"
                            alt="" class="card-img-top mx-auto">
                        <div class="card-body p-0">
                            <div class="card-title text-center">
                                <p class="text-dark mb-0">Cloth Store</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card end -->
                <div class="item ">
                    <div class="card border-0 " style="width: 70%;margin: auto;">
                        <img style="border-radius: 50%; width: 100px; height:100px" src="./assets/img/category_slide_bar/electronics.png"
                            alt="" class="card-img-top mx-auto">
                        <div class="card-body p-0">
                            <div class="card-title text-center">
                                <p class="text-dark mb-0">Electronics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card end -->
                <div class="item ">
                    <div class="card border-0 " style="width: 70%;margin: auto;">
                        <img style="border-radius: 50%; width: 100px; height:100px" src="./assets/img/category_slide_bar/food.png" alt=""
                            class="card-img-top mx-auto">
                        <div class="card-body p-0">
                            <div class="card-title text-center">
                                <p class="text-dark mb-0">Mudir Dukhan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card end -->
                <div class="item ">
                    <div class="card border-0 " style="width: 70%;margin: auto;">
                        <img style="border-radius: 50%; width: 100px; height:100px"
                            src="./assets/img/category_slide_bar/hardware-store.png" alt="" class="card-img-top mx-auto">
                        <div class="card-body p-0">
                            <div class="card-title text-center">
                                <p class="text-dark mb-0">hardware Store</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card end -->
                <div class="item ">
                    <div class="card border-0 " style="width: 70%;margin: auto;">
                        <img style="border-radius: 50%; width: 100px; height:100px" src="./assets/img/category_slide_bar/medical-shop.png"
                            alt="" class="card-img-top mx-auto">
                        <div class="card-body p-0">
                            <div class="card-title text-center">
                                <p class="text-dark mb-0">Medical</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card end -->
                <div class="item">
                    <div class="card border-0 " style="width: 70%;margin: auto;">
                        <img style="border-radius: 50%; width: 100px; height:100px" src="./assets/img/category_slide_bar/mudi.png" alt=""
                            class="card-img-top mx-auto">
                        <div class="card-body p-0">
                            <div class="card-title text-center">
                                <p class="text-dark mb-0">Mudir Dukhan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card end -->
            </div>
        </div>
    </div>
</div>

  <!-- nev section start  -->

  <nav class="navbar navbar-expand-lg nav-bg-color">
    <div class="container-fluid">
        <button class="navbar-toggler ml-auto custom-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent" style="margin-left: -23px;">
            <ul class="navbar-nav mx-auto mb-2 mx-4 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link txt_color" aria-current="page" href="{{ Url('') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt_color " aria-current="page" href="{{ Url('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt_color " aria-current="page" href="{{ Url('services') }}">Our Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt_color " aria-current="page" href="{{ Url('message') }}">Message</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt_color " href="{{ Url('partner') }}">Partner</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link txt_color dropdown-toggle " href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Join Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Retailer Registration</a></li>
                        <li><a class="dropdown-item" href="#">Wholesaler Registration</a></li>
                        <li><a class="dropdown-item" href="#">Direct Retailer Service Form</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt_color " href="{{ Url('enterprise') }}">Enterprises</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt_color " href="{{ Url('media') }}">Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link txt_color  btn-contact" href="{{ Url('contact') }}">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link txt_color dropdown-toggle " href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Select service
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search Our All Service"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


@yield('main')

 

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Subscribe Our News Letter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Dhaka Choice Ltd</h3>
            <p>
              House#254, Road#03, <br>
              Ground Floor, Baridhara<br>
              DOHS, Dhaka-1212 <br><br>
              <strong>Phone:</strong> 
              +8801404411444<br>
              <strong>Email:</strong> info.dhakachoice@gmail.com
              <br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Navigation</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Business</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Apply Now</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Dhaka Choice Ltd</span></strong>. All Rights Reserved <p id="year"></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Flyte Solutions Ltd</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    // ========== header slider js function ===================
    $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: false,
            autoplayTimeout: 1000,
            stagePadding: 50,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                400: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

        //  Chat js file start hare
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }



    function googleTranslateElementInit() {
        var translator = new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,bn',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }

  // copyRight year
  document.getElementById("year").innerHTML = new Date().getFullYear();
</script>

</body>

</html>