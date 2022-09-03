<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>لوحة التحكم - السلام هيلز</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Favicons -->

  <!-- Favicons -->
  <link href="img/plant-fill.png" rel="icon">
  <link href="img/apple-touch-plant-fill.png" rel="apple-touch-icon">

  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!-- Styles -->
  <link href="{{ asset('css/style.css') }}?v=<?php echo time(); ?>" rel="stylesheet">


  <link href="{{ asset('css/dashboard.css') }}?v=<?php echo time(); ?>" rel="stylesheet">


  <!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
-->
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">


  <!--   

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 -->

  <script src="/js/dashboard.js"></script>

  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




  @stack('styles')

</head>

<body style="background-color: #f9f9f9;">


  <!-- ======= currency_btn Bar ======= -->
  <section style="padding: 5px 0; background-color: white;">
    <div class="header_main">
      <div class="container">
        <div class="row">
          <!-- Logo -->
          <div class="col-lg-6 col-sm-6 col-6 order-1">
            <div class="logo_container">
              <div class="logo"><a href="/" style="color: #f0d491;">السلام هيلز</a></div>
            </div>
          </div>

          <div class="col-lg-6 col-6 order-lg-2 order-2 text-lg-left text-right" style="padding:10px;">


            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">



              <div class="dropdown-user-list">
                <button class="dropbtn-userlist">

                  <div class="user-identity__img">
                    <img src="/img/user1.png" alt="User Img">
                  </div>
                  <span>الأدمن</span>
                  <i class="bi bi-chevron-down arrow-user"></i>

                </button>
                <div class="dropdown-userlist-content">
                  <a href="/new-notifications"><i class="bi bi-bell"></i> الإشعارات <span style="color:red;font-size: 15px;"></span></a>
                  <a href="/dashboard"><i class="bi bi-gear-wide-connected"></i>لوحة التحكم</a>
                  <a href="/"><i class="bi bi-house-door-fill"></i>الرئيسية</a>
                  <a action="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-door-open"></i>تسجيل الخروج</a>
                </div>

                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>




            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

  @yield('content')
  <!-- ======= Hero Section ======= -->


</body>


<!-- Vendor JS Files -->
<script src="/vendor/aos/aos.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/vendor/php-email-form/validate.js"></script>
<script src="/vendor/purecounter/purecounter.js"></script>
<script src="/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File
  <script src="/js/main.js"></script>
-->

</html>