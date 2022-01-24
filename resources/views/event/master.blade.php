<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  @foreach($setting as $key => $setting)
  <title>{{$setting->Site_name }} </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset($setting->logo )}}" rel="icon">
  <link href="{{asset($setting->logo )}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/')}}assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('/')}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v4.7.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
   
     <!-- <h1 class="logo me-auto"><a href="index.html"><span>Com</span>pany</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
     <a href="{{route('/')}}"  class="logo me-auto "><img src="{{asset($setting->logo )}}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{route('/')}}" class="active">Home</a></li>

          <li class="dropdown"><a href="{{route('about')}}"><span>About Us</i></a>
          
          </li>

          
          <li><a href="{{route('model')}}">Our Model</a></li>
         
          <li><a href="{{route('contuct')}}">Contact</a></li>

          @if($customar_id =  Session::get('customar_id'))
              
              <a style="text-decoration: none;"  href="" href="#" onclick="event.preventDefault(); document.getElementById('logout').submit();" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                Logout
                </span>
              </a>
              <form action="{{ route('coustomar-logout')}}" method="POST" id="logout">
                @csrf
              </form>
              @else
              <a style="text-decoration: none;"  href="{{route('signup')}}" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  Login
                </span>
              
              </a>
              <a style="text-decoration: none;"  href="{{route('signup')}}" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  Signup
                </span>
               
              </a>
              @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="{{ $setting->twitter}}" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="{{ $setting->facebook}}" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="{{ $setting->instagram}}" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="{{ $setting->whatsapp}}" class="linkedin"><i class="bu bi-whatsapp"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

        <!-- End Header -->
        
        @yield('body')

        <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>{{$setting->Site_name }}</h3>
        <p>
          Dhaka Event Management <br>
          Dhaka City<br>
         Bangladesh<br><br>
          <strong>Phone:</strong> {{ $setting->phone}}<br>
          <strong>Email:</strong> {{ $setting->Email}}<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('/')}}">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('contuct')}}">Contact</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{route('policy')}}">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul class="text-center">
        @foreach($categories as $key => $categor)
        <li><a href="{{route('model')}}">{{$categor->name }}</a></li>
           
        @if($loop->iteration == 4)
        @break
        @endif
        @endforeach
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join With Us</h4>
        <div class="header-social-links d-flex">
        <a href="{{ $setting->twitter}}"><i style="font-size: 30px;" class="bu bi-twitter "></i></a>
        <a href="{{ $setting->facebook }}"><i style="font-size: 30px;" class="bu bi-facebook"></i></a>
        <a href="{{$setting->instagram }}"><i style="font-size: 30px;" class="bu bi-instagram"></i></a>
        <a href="{{$setting->whatsapp}}"><i style="font-size: 30px;" class="bu bi-whatsapp"></i></i></a>
      </div>
      </div>

    </div>
  </div>
</div>
<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>vip service</span></strong>. All Rights Reserved
    </div>
  
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="{{ $setting->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="{{ $setting->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="{{$setting->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="{{$setting->whatsapp}}" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
   
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endforeach
<!-- Vendor JS Files -->
<script src="{{asset('/')}}assets/vendor/aos/aos.js"></script>
<script src="{{asset('/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="{{asset('/')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="{{asset('/')}}assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('/')}}assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="{{asset('/')}}assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('/')}}assets/js/main.js"></script>

</body>

</html>