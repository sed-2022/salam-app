@extends('layouts.app')

@push('styles')


<style>
  #hero2:before {
    content: "";
    background: rgba(0, 0, 0, .6);
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }

  #hero2 {
    height: 50vh;
    background: url("{{ asset('/img/houses-background.jpg') }}") top center;

    background-size: cover;
    position: relative;
    padding: 0;
    background-repeat: no-repeat;
  }


  .footer-area .single-footer-widget .social-info a {
    padding: 9px;
  }
</style>

@endpush

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero2" class="hero d-flex align-items-end">

  @include('layouts.partials.side-nav')

  <div class="container">
    <div class="row">

      <div class="col-lg-12 d-flex flex-row justify-content-start">
        <h2 style="font-size: 34px; line-height: 2; font-weight: 600; z-index: 900;" class="">الوحدات السكنية</h2>
      </div>

    </div>
  </div>

</section>
<!-- End Hero -->

<!-- ======= Portfolio Section ======= -->
<section id="protoypes" class="protoypes">
  <div hidden class="section-title">
    <h1 class="gradient-text">الوحدات السكنية</h1>
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
@endsection