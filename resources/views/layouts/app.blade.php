<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>السلام هيلز</title>
  <meta content="فلل فاخرة ومنازل فاخرة في السلام هيلز" name="description">

  <meta content="منازل , السلام هيلز, فلل فاخرة, موقع, مدونة, website, blog, عقار, فلل" name="keywords">

  <meta name="author" content="السلام هيلز">
  <meta name="publisher" content="السلام هيلز">

  <meta name="copyright" content="السلام هيلز">

  <meta name="page-topic" content="Villas">
  <meta name="page-type" content="Blogging">
  <meta name="audience" content="Everyone">
  <meta name="robots" content="index, follow">
  <!-- Favicons -->
  <link href="img/small-logo.png" sizes="128x128" rel="icon">
  <link href="img/small-logo.png" rel="apple-touch-icon">

  <meta name="google-site-verification" content="imc9n37cjBljjX8hK7icZae-7rMRfQJ-be_MZf5sBSw" />
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Scripts 
    
          <script src="{{ asset('js/main.js') }}" defer></script>

    -->

  <!-- Styles -->
  <link href="{{ asset('css/style.css') }}?v=<?php echo time(); ?>" rel="stylesheet">


  @stack('styles')

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo">
        <a href="/">

          <img src="img/large-logo2.png" alt="">
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}" href="/">الرئيسية</a></li>
          <li><a class="nav-link scrollto {{ request()->is('houses-units') ? 'active' : '' }}" href="/houses-units">الوحدات السكنية</a></li>
          <li><a class="nav-link scrollto {{ request()->is('project-scheme') ? 'active' : '' }}" href="/project-scheme">مخطط المشروع</a></li>
          <li><a class="nav-link scrollto {{ request()->is('periodic-reports') ? 'active' : '' }}" href="/periodic-reports">تقارير دورية</a></li>

          <li><a class="nav-link scrollto {{ request()->is('funding-companies') ? 'active' : '' }}" href="/funding-companies">الجهات التمويلية</a></li>

          <li><a class="nav-link scrollto {{ request()->is('contact') ? 'active' : '' }}" href="/contact">اتصل بنا</a></li>



          @guest
          @if (Route::has('login'))
          <li><a class="getstarted cool-btn-effect scrollto" style="color: white !important;" href="/reserve-appoinment">حدد موعد
              للزيارة</a></li>

          @endif


          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link control-panel dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
              <div class="numberCircle">{{auth()->user()->unreadNotifications->count()}}</div>
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/all-notifications-list">لوحة التحكم</a>
              <a class="dropdown-item logout-btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          @endguest


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>



  @yield('content')



  <!-- ##### Footer Area Start ##### -->
  <footer class="footer-area bg-img">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
      <div class="container">
        <div class="row">
          <!-- Single Footer Widget -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget">
              <div class="footer-logo">
                <h3 style="color:white;font-weight:bold;margin-inline-end: 9px;"><span style="color:#f0d491;">السلام </span>هيلز</h3>
                <h2 data-aos="fade-left" class="h1-style gradient-text gradient-text2 d-flex align-items-center aos-init aos-animate">|</h2>
                <h3 style="color:white;font-weight:bold;margin-inline-end: 9px;"><span style="color:#f0d491;">Al Salam </span>Hielz</h3>              </div>
              <p class="change-on-mobile"> عنوانك لإختيار منزلك </p>
              <div class="change-on-mobile social-info">
                <a href="#" class="cool-btn-effect"><i class="bi bi-youtube" aria-hidden="true"></i></a>
                <a href="#" class="cool-btn-effect"><i class="bi bi-twitter" aria-hidden="true"></i></a>
                <a href="#" class="cool-btn-effect"><i class="bi bi-instagram" aria-hidden="true"></i></a>
                <a href="#" class="cool-btn-effect"><i class="bi bi-snapchat" aria-hidden="true"></i></a>
              </div>

            </div>
          </div>

          <!-- Single Footer Widget -->
          <div class="col-12 col-sm-6 col-lg-4 d-flex justify-content-center">
            <div class="single-footer-widget">
              <div class="widget-title d-flex justify-content-start">
                <h5>روابط</h5>
              </div>
              <nav class="widget-nav d-flex justify-content-start">
                <ul>
                  <li><a href="/houses-units">الوحدات السكنية</a></li>
                  <li><a href="/project-scheme">مخطط المشروع</a></li>
                </ul>

                <ul style="margin-inline-start: 24px;">
                  <li><a href="/periodic-reports">تقارير دورية</a></li>
                  <li><a href="/funding-companies">الجهات التمويلية</a></li>

                </ul>
              </nav>
            </div>
          </div>


          <!-- Single Footer Widget -->
          <div class="col-10 col-sm-6 col-lg-4 d-flex justify-content-center">
            <div class="single-footer-widget">
              <div class="widget-title" style="margin-bottom: 40px;">
                <h5>تواصل معنا</h5>
              </div>

              <div class="contact-information">
                <p><span class="gradient-text"><i class="bi bi-phone"></i></span>920020383</p>

                <!-- <a href="https://wa.me/+966568426226" target="_blank"><p><span class="gradient-text"><i class="bi bi-phone-fill"></i></span>0568436226</p></a> -->
                <p><span class="gradient-text"><i class="bi bi-envelope-fill"></i></span>info@sabiagarden.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom Area -->
    <div class="footer-bottom-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="border-line"></div>
          </div>
          <!-- Copywrite Text -->
          <div class="col-12 col-md-6">
            <div class="copywrite-text">
              <p class="d-flex align-items-center text-center">
                <span> &copy; 2022
                  جميع الحقوق محفوظة لشركة عمر عبدالرحمن الزرعة وشركاؤه للتطوير العقاري <i class="bi bi-heart-o" aria-hidden="true"></i></span>

                <span hidden style="margin-inline-start: 4px;">
                
                  <!--
                  <script>
                    document.write(new Date().getFullYear());
                  </script>

                  -->
                </span>
              </p>
            </div>
          </div>

          <div class="col-12 col-md-6 d-flex bottom-notes">
            <div class="copywrite-text gradient-text copywrite-text2">
              <p>طور الموقع بواسطة مؤسسة المساند الرقمي لتقنية المعلومات</p>
            </div>
          </div>


        </div>
      </div>
    </div>
  </footer>
  <!-- ##### Footer Area End ##### -->


  <a href="https://wa.me/+966568436226" target="_blank" class="whatsapp-icon d-flex align-items-center justify-content-center active"><i style="color:#25D366" class="ri-whatsapp-fill"></i></a>


  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>