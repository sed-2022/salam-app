@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- <link rel="stylesheet" type="text/css" href="carousel.css" rel="stylesheet" type="text/css">-->

<link href="{{ asset('css/carousel.css') }}?<?php echo time(); ?>" rel="stylesheet">


<script src="{{ asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>


<script>
  $('.carousel').carousel({
    interval: 1000
  })
</script>

@section('content')


<style>
  .hide-me {
    visibility: hidden;
  }

  @media only screen and (max-width: 767px) {
    .hide-me {
      visibility: visible !important;
      display: none !important;
    }

  }

  .slick-prev {
    display: none;
  }

  .slick-next:focus {
    border: none;
    box-shadow: none;
    outline: none;
  }

  .slick-next {
    outline: none !important;
    font-size: 24px;
    display: inline-block;
    top: 25%;
    left: 20px;
    position: absolute;
    background-color: transparent;
  }

  .slick-next:hover {
    opacity: 0.8;
  }

  .slick-slide img {
    width: 130px;
    height: 130px;
    object-fit: contain;
  }

  .slick-list {
    margin-left: 55px;
  }

  .slide-container0 {
    padding-top: 2.5%;
    padding-bottom: 4%;
  }

  @media all and (max-width:767px) {
    .slide-container0 {
      padding-top: 5%;
    }
  }
</style>

<div id="carouselExampleIndicators" class="carousel slide top-header" data-ride="carousel">

  <ul class="contact-us-menue list-unstyled">
    <li>
      <a href="/reserve-house" class="cool-btn-effect contact-reserve">
        <span>احجز الآن</span>
      </a>
    </li>
    <li hidden>
      <a href="tel:0568436226">
        <i class="bi bi-phone gradient-text"></i>

        <span>0568436226</span>
      </a>
    </li>
    <li>
      <a href="tel:0568436226">
        <div>
          <i class="bi bi-phone gradient-text" style="font-size: 24px;"></i>
          <i class="bi bi-whatsapp gradient-text" style="font-size: 24px;"></i>
          <span hidden>0568436226</span>
        </div>
      </a>
    </li>
    <li>
      <a class="cool-btn-effect contact-reserve" style="font-size: 13px;" target="_blank" href="/storage/images_stduio/{{$home_settings->pdf_file}}">
        <i class="contact-recall"></i>
        <span>ملف المشروع pdf</span>
      </a>

    </li>

  </ul>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div id="hero" class="hero carousel-item" style="background: url('/img/background-main.jpg') top center;background-size: cover; position: relative; padding: 0; background-repeat: no-repeat;">

    </div>
    <div id="hero" class="hero align-items-center carousel-item active" data-interval="500" style="background: url('/img/background-main.jpg') top center;background-size: cover; position: relative; padding: 0; background-repeat: no-repeat;">
      <div class="row">
        <div class="col-lg-12 d-flex flex-row justify-content-center">
          <h1 data-aos="fade-right" class="gradient-text d-flex align-items-center">منزل أحلامك </h1>
          <h1 data-aos="fade-left" class="h1-style gradient-text gradient-text2 d-flex align-items-center"> | شغفنا</h1>
        </div>

      </div>
    </div>
    <div id="hero" class="hero carousel-item" style="background: url('/img/background-main.jpg') top center;background-size: cover; position: relative; padding: 0; background-repeat: no-repeat;">

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>

</div>


<main id="main">
  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">

            <!--<p class="brief-title">رؤيتنا</p> -->
            <h1 style="font-weight: 700;" class="sabya-summary-gradient-text">
              نبذة عن عمائر السلام هيلز

            </h1>
            <p style="margin-top: 35px; margin-bottom: 35px;">
              {{$home_settings->about_sabya}}
            </p>

          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="/storage/images_stduio/{{$home_settings->about_sabya_photo}}" class="img-fluid" alt="about sabya">
        </div>

      </div>
    </div>



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 col-sm col-4">
            <div class="count-box">
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{$home_settings->area_number}}" data-purecounter-duration="1" class="purecounter gradient-text"></span>
                <p>المساحة م<sup>2</sup></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm col-4">
            <div class="count-box">
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{$home_settings->units_number}}" data-purecounter-duration="1" class="purecounter gradient-text"></span>
                <p>عدد الوحدات</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm col-4">
            <div class="count-box">
              <div>
                <span data-purecounter-start="0" data-purecounter-end="{{$home_settings->facilites_number}}" data-purecounter-duration="1" class="purecounter  gradient-text"></span>
                <p>المرافق العامة</p>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Counts Section -->


  </section><!-- End About Section -->





  <!-- ======= Details Section ======= -->
  <section id="details" class="details">
    <div class="container">


      <div class="row content">
        <div class="col-md-7 order-1 order-md-2" data-aos="fade-left">
          <img src="/storage/images_stduio/{{$home_settings->about_developer_photo}}" class="img-fluid" alt="about devloper">
        </div>
        <div class="col-md-5 order-2 order-md-1" data-aos="fade-up">
          <p class="brief-title2">عن المطور</p>
          <h4 style="font-weight: 800;" class="gradient-text">{{$home_settings->about_developer_title}}</h4>
          <p style="margin-top: 20px;">
            {{$home_settings->about_developer_content}}
            <span></span>
            ولقد تخصصت شركتنا في تطوير الأراضي الخام بنوعين من التطوير وهما :

          </p>
          <p hidden>
            <i class="bi bi-arrow-return-left gradient-text"></i>
            {{$home_settings->about_developer_more}}
          </p>
          <p>
            <i class="bi bi-arrow-return-left gradient-text"></i>
            النوع الأول : وهو تطوير البنية التحتية للأراضي الخام وذلك بتصميم وتنفيذ الخدمات الأساسية اللازمة لتجزئة الأرض الخام وفرزها وبيعها كقطع تجارية وسكنية.
          </p>
          <p>
            <i class="bi bi-arrow-return-left gradient-text"></i>
            النوع الثاني :هو التطوير الشامل للأراضي الخام وذلك بتصميم وتنفيذ البنية التحتية وكذلك تصميم وتنفيذ المباني التجارية والسكنية وذلك وفق أحدث المعايير وطبقاً للأنظمة والاشتراطات.
          </p>
        </div>
      </div>


    </div>
  </section><!-- End Details Section -->


  <!-- ======= featured-services Section ======= -->
  <section id="featured-services" class="featured-services">


    <div class="container-fluid" data-aos="fade-up">

      <div class="section-title row">
        <div class="col-1"></div>
        <div class="col-11 d-flex justify-content-start" style="padding: 0px;">
          <h5>مميزات المشروع</h5>
        </div>
      </div>


      <div class="row" style="margin-bottom: 24px;">
        <div class="col-1"></div>
        <div class="col-11 d-flex justify-content-start" style="margin-bottom: 3% !important;padding: 0px;">
          <h1 class="features-gradient-text" style="line-height: 2;font-weight: 600;">بيئة سكنية متكاملة ترتقي لتطلعاتكم</h1>
        </div>
      </div>

      <div class="row d-flex justify-content-center">
        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="ri-map-pin-line"></i></div>
            <h6>موقع استراتيجي</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>


        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-house-door"></i></div>
            <h6>نماذج وتصاميم عصرية</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>

        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="ri-map-2-line"></i></div>
            <h6>توفير مساحات مختلفة</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>

        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-patch-check"></i></div>
            <h6>تأمين العيوب الخفية</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>

        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-shield-check"></i></div>
            <h6>ضمان إنشائي</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>


        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch hide-me" style="width: 10px;">

        </div>

        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-people"></i></div>
            <h6>جمعية الملاك</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>


        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-building"></i></div>
            <h6>بناء مستدام</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>

        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="ri-table-alt-line"></i></div>
            <h6>بنية تحتية متكاملة</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>

        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="ri-chat-settings-line"></i></div>
            <h6>ضمانات ما بعد البيع</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>

        <div class="mt-3 col-lg-2 col-sm col-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-cash-stack"></i></div>
            <h6>أسعار تنافسية</h6>
            <i class="go-left-arr gradient-text icon-box-bottom">←</i>
          </div>
        </div>

      </div>


    </div>
  </section><!-- End featured-services Section -->



  <!-- ======= Portfolio Section ======= -->
  <section id="protoypes" class="protoypes">
    <div class="section-title">
      <h1 class="gradient-text intro-title">الوحدات السكنية</h1>
    </div>
    <ul class="d-flex justify-content-center">
      <li class="col-lg-4 col-xs-12 b-card-container" onclick="location.href='/prototyp-A'">
        <div class="top-title-container">
          <div class="top-title  gradient-text">{{$home_settings->protoype_A_title}}</div>
        </div>
        <div class="booking-card" onclick="location.href='/prototyp-A'" style="background-image: url('/storage/images_stduio/{{$home_settings->protoype_A_photo}}')">
          <div class="informations-container">
            <div class="d-flex justify-content-center">
              <h2 class="title">غرف النوم
                <span style="margin-top: 11px;">{{$home_settings->A_rooms}}</span>

              </h2>


              <h1 style="margin: 8px;" class="h1-style gradient-text gradient-text2 d-flex align-items-center">|</h1>

              <h2 class="title">مساحة الشقق

                <span style="margin-top: 11px;">{{$home_settings->protoype_A_bulding_area}} م<sup>2</sup></span>

              </h2>
            </div>
            <div class="more-information">
              <div class="info-and-date-container">
                <div class="box">
                  <div class="top-title  gradient-text"> {{number_format($home_settings->protoype_A_price)}}
                    ريال
                  </div>
                  <div class="top-title  gradient-text bottom-icon"><span style="font-size: 0.5em; margin-inline-end: 3px;">تفاصيل</span><i class="go-left-arr">←</i></div>
                </div>

              </div>
              <p style="visibility: hidden;" class="disclaimer">Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Quasi eveniet
                perferendis
                culpa. Expedita architecto nesciunt, rem distinctio</p>
            </div>
          </div>
      </li>

      <li class="col-lg-4 col-xs-12 b-card-container" onclick="location.href='/prototyp-B'">
        <div class="top-title-container">
          <div class="top-title  gradient-text">{{$home_settings->protoype_B_title}}</div>
        </div>
        <div class="booking-card" onclick="location.href='/prototyp-B'" style="background-image: url('/storage/images_stduio/{{$home_settings->protoype_B_photo}}')">
          <div class="informations-container">
            <div class="d-flex justify-content-center">
              <h2 class="title">غرف النوم
                <span style="margin-top: 11px;">{{$home_settings->B_rooms}} </span>

              </h2>


              <h1 style="margin: 8px;" class="h1-style gradient-text gradient-text2 d-flex align-items-center">|</h1>

              <h2 class="title">مساحة الشقق

                <span style="margin-top: 11px;">{{$home_settings->protoype_B_bulding_area}} م<sup>2</sup></span>

              </h2>
            </div>
            <div class="more-information">
              <div class="info-and-date-container">
                <div class="box">
                  <div class="top-title  gradient-text"> {{number_format($home_settings->protoype_B_price)}}
                    ريال
                  </div>
                  <div class="top-title  gradient-text bottom-icon"><span style="font-size: 0.5em; margin-inline-end: 3px;">تفاصيل</span><i class="go-left-arr">←</i></div>
                </div>

              </div>
              <p style="visibility: hidden;" class="disclaimer">Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Quasi eveniet
                perferendis
                culpa. Expedita architecto nesciunt, rem distinctio</p>
            </div>
          </div>
      </li>
      <li class="col-lg-4 col-xs-12 b-card-container" onclick="location.href='/prototyp-C'">
        <div class="top-title-container">
          <div class="top-title  gradient-text">{{$home_settings->protoype_C_title}}</div>
        </div>
        <div class="booking-card" onclick="location.href='/prototyp-C'" style="background-image: url('/storage/images_stduio/{{$home_settings->protoype_C_photo}}')">
          <div class="informations-container">
            <div class="d-flex justify-content-center">
              <h2 class="title">غرف النوم
                <span style="margin-top: 11px;">{{$home_settings->C_rooms}} </span>

              </h2>


              <h1 style="margin: 8px;" class="h1-style gradient-text gradient-text2 d-flex align-items-center">|</h1>

              <h2 class="title">مساحة الشقق

                <span style="margin-top: 11px;">{{$home_settings->protoype_C_bulding_area}} م<sup>2</sup></span>

              </h2>
            </div>
            <div class="more-information">
              <div class="info-and-date-container">
                <div class="box">
                  <div class="top-title  gradient-text"> {{number_format($home_settings->protoype_C_price)}}
                    ريال
                  </div>
                  <div class="top-title  gradient-text bottom-icon"><span style="font-size: 0.5em; margin-inline-end: 3px;">تفاصيل</span><i class="go-left-arr">←</i></div>
                </div>

              </div>
              <p style="visibility: hidden;" class="disclaimer">Lorem ipsum dolor sit amet consectetur, adipisicing
                elit. Quasi eveniet
                perferendis
                culpa. Expedita architecto nesciunt, rem distinctio</p>
            </div>
          </div>
      </li>

    </ul>

  </section>


  <section id="promotion" class="promotion" style="padding-top:0; padding-bottom:0;">

    <div class="row d-flex align-items-center" style="padding-top: 0px; height: 100%;">

      <div class="col-lg-4 d-flex justify-content-center">
        <img src="/storage/images_stduio/{{$home_settings->promotional_section}}" alt="Paris" width="500" height="300" style="width: 350px; height: 199px; object-fit: contain;" alt="promotion">
      </div>

      <div class="col-lg-4">

        <span class="promotion-title gradient-text ">
        وحدات سكنية فاخرة في السلام هيلز
        </span>

      </div>

      <div class="col-lg-4 d-flex justify-content-center btn-contact-container-all" onclick="location.href='/reserve-house'">
        <div class="cool-btn-effect contact-btn-mainContainer">
          <div class="btn-contact-container">
            <div hidden class="btn-contact2"></div>
            <div class="btn-contact">احجز مكانك</div>
          </div>
        </div>
      </div>


    </div>
  </section>




  <!-- ======= Service integration Section ======= -->
  <section id="service-integration" class="service-integration">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h1 class="gradient-text intro-title">تكامل الخدمات</h1>
      </div>

      <div class="row">
        <div class="col-sm col-4 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box icon-box2" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="ri-roadster-fill"></i></div>
            <h4 class="title gradient-text"><span>شبكة الطرق</span></h4>
          </div>
        </div>

        <div class="col-sm col-4 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon icon2"><i class="ri-contrast-drop-2-line"></i></div>
            <h4 class="title gradient-text gradient-text2"><span>شبكة المياه</span></h4>
          </div>
        </div>

        <div class="col-sm col-4 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box icon-box2" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="ri-lightbulb-flash-line"></i></div>
            <h4 class="title gradient-text"><span>إنارة الطرق</span></h4>
          </div>
        </div>

        <div class="col-sm col-4 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon icon2"><i class="ri-flashlight-line"></i></div>
            <h4 class="title gradient-text gradient-text2"><span>شبكة الكهرباء</span></h4>
          </div>
        </div>

        <div class="col-sm col-4 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon icon2"><i class="ri-compass-4-line"></i></div>
            <h4 class="title gradient-text"><span>شبكة الصرف الصحي</span></h4>
          </div>
        </div>

        <div class="col-sm col-4 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box icon-box2" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="ri-leaf-line"></i></div>
            <h4 class="title gradient-text gradient-text2"><span>أرصفة وتشجير</span></h4>
          </div>
        </div>

        <div class="col-sm col-4 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon icon2"><i class="ri-open-arm-line"></i></div>
            <h4 class="title gradient-text"><span>حدائق وألعاب</span></h4>
          </div>
        </div>

        <div class="col-sm col-4 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box icon-box2" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="ri-bar-chart-line"></i></div>
            <h4 class="title gradient-text gradient-text2"><span>مسارات للمشي</span></h4>
          </div>
        </div>

      </div>




    </div>
  </section><!-- End Service integration Section -->


  <!-- ======= Clients2 Section ======= -->
  <section id="clients2" class=" section-bg">
    <div class="container" data-aos="zoom-in">

      <div class="section-title">
        <h1 class="gradient-text intro-title">الشركات المنفذة</h1>
      </div>

      <div class="row d-flex">

        <?php $colors = array("--accent-color:#F3A22D", "--accent-color:#D3302C", "--accent-color:#495460", "--accent-color: #00bd66", "--accent-color: #00a2c1", "--accent-color: #005cc1", "--accent-color: #8900c1", "--accent-color: #c1006b"); ?>

        <?php $colorsTitle = array("#F3A22D", "#D3302C", "#495460", " #00bd66", " #00a2c1", " #005cc1", " #8900c1", "#c1006b"); ?>

        <?php $colorIndex = 6; ?>


        <?php $togglePos = true; ?>
        <ul class="ul-circles">

          @foreach($involved_company_settings as $item)

          <?php $colorIndex--; ?>

          <?php if ($colorIndex < 0) {
            $colorIndex = 7;
          } ?>


          <li style="<?php echo $colors[$colorIndex]; ?>">

            <div class="<?php if ($togglePos) {
                          echo "top";
                        } else {
                          echo "bottom";
                        } ?>" style="color:<?php echo $colorsTitle[$colorIndex]; ?>">{{$item->title}}</div>

            <?php $togglePos = !$togglePos; ?>

            <img src="/storage/images_stduio/{{$item->logo}}" class="img-fluid" alt="company logo">

          </li>

          @endforeach
        </ul>



      </div>


    </div>


    <div class="container" data-aos="zoom-in" style="padding-top: 8%;">

      <div class="section-title">
        <h1 class="gradient-text intro-title">شركاء النجاح</h1>
      </div>


      <div class="row  d-flex align-items-center slide-container0">
        <div class="col-12" style="margin-right: 0px;direction: ltr;">

          <div class="customer-logos slider">
            @foreach($success_partners_settings as $item)

            <div class="slide"><img src="/storage/images_stduio/{{$item->logo}}" alt="logo"></div>
            @endforeach

          </div>
        </div>

      </div>


      <a style="visibility: hidden;" href="https://insaf.com.sa/">منصة إنصاف</a>
    </div>
  </section><!-- End Clients2 Section -->


  <script type="text/javascript">
    $(document).ready(function() {
      $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }]
      });
    });
  </script>

</main><!-- End #main -->


@endsection