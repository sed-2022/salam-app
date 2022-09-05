@extends('layouts.app') @push('styles')


<style>
    /*--------------------------------------------------------------
# Protoypes
--------------------------------------------------------------*/

    .protoypes {
        padding: 0px;
    }

    .protoypes ul .booking-card {
        height: 390px;
    }

    .protoypes ul .b-card-container {
        padding-left: 0px;
        padding-right: 0px;
    }

    .protoypes ul .booking-card .informations-container {
        padding-top: 25px;
        transform: translateY(255px);
    }

    .protoypes ul .b-card-container .top-title {
        margin-top: 3%;
    }

    .protoypes ul .booking-card .informations-container .title {
        padding-bottom: 0px;
        margin-bottom: 0px;
    }

    .protoypes ul .booking-card .informations-container .more-information {
        opacity: 1;
    }

    .protoypes ul .booking-card .informations-container .more-information .info-and-date-container .box {
        display: inline-flex;
    }

    .protoypes ul .booking-card:hover .informations-container {
        transform: translateY(255px);
    }

    .protoypes ul .booking-card:hover .informations-container .more-information {
        opacity: 1;
    }

    @media (max-width: 768px) {

        .download-btn {
            font-size: 12px !important;
        }

        .protoypes ul .booking-card .informations-container {
            transform: translateY(255px);
        }

        .protoypes ul .booking-card .informations-container .title {
            margin-inline-start: 6%;
        }
    }

    .protoypes ul .booking-card .bottom-icon {
        margin-inline-start: 0%;
    }

    /*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/

    .portfolio-details {
        padding-top: 40px;
    }

    .portfolio-details .portfolio-details-slider img {
        width: 100%;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination {
        margin-top: 20px;
        position: relative;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #fff;
        opacity: 1;
        border: 1px solid #4154f1;
    }

    .portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
        background-color: #4154f1;
    }

    .portfolio-details .portfolio-info {
        padding: 30px;
        box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
        width: 92%;
        margin: auto;
    }

    .portfolio-details .portfolio-info h4 {
        font-size: 22px;
        /*font-weight: 700;*/
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .portfolio-details .portfolio-info ul {
        list-style: none;
        padding: 0;
        font-size: 15px;
        /**padding-inline-start: 14%;*/
        justify-content: center;
        display: flex;
        /**  direction:rtl;  */
    }

    .portfolio-details .portfolio-info ul li+li {
        margin-top: 10px;
    }

    .portfolio-details .portfolio-info ul li {
        /*display: flex;*/
        justify-content: center;
        display: flex;
        width: 30%;
    }

    .portfolio-details .portfolio-info ul .green-circle {
        background-color: green;
        border-radius: 50%;
        height: 1.8vh;
        width: 1.8vh;
        margin-inline-end: 8px;
    }

    .portfolio-details .portfolio-info ul .red-circle {
        background-color: red;
        border-radius: 50%;
        height: 1.8vh;
        width: 1.8vh;
        margin-inline-end: 8px;
    }

    #portfolio-header .portfolio-info ul {
        width: unset;
        padding-inline-start: 0%;
        display: contents;
    }

    #portfolio-header .portfolio-info ul li {
        display: flex;
        width: unset;
    }

    #hero2 {
        background: url("{{ asset('/img/shceme.jpg') }}") top center;
        background-size: cover;
        position: relative;
        padding: 0;
        background-repeat: no-repeat;
    }

    .image-magnifier {
        /**  max-width: 300px;*/
        margin: 25px;
    }

    .image-magnifier img {
        max-width: 100%;
        border: 1px solid #ababab;
    }

    .loupe {
        display: none;
        position: absolute;
        width: 200px;
        height: 200px;
        border: 1px solid black;
        box-shadow: 5px 5px 12px black;
        background: rgba(0, 0, 0, 0.25);
        cursor: crosshair;
        overflow: hidden;
    }

    .loupe img {
        position: absolute;
        right: 0;
    }

    .searh_input {
        width: 100%;
        box-sizing: border-box;
        background-image: url('searchicon.png');
        background-position: 14px 12px;
        background-repeat: no-repeat;
        padding: 3px 16px;
        border: none;
        border-bottom: 1px solid #ddd;
        text-align: center;
        margin-bottom: 11px;
    }

    .searh_input:focus {
        outline: 3px solid #ddd;
    }

    .categories-content {
        height: 375px;
        overflow: auto;
        /**direction:ltr; */
    }

    .portfolio-info ::-webkit-scrollbar {
        width: 20px;
    }

    /* Track */

    .portfolio-info ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */

    .portfolio-info ::-webkit-scrollbar-thumb {
        background: #f0d491;
        border-radius: 10px;
        height: 60px;
    }

    /* Handle on hover */

    .portfolio-info ::-webkit-scrollbar-thumb:hover {
        background: #a47947;
    }


    .footer-area .single-footer-widget .social-info a {

        padding: 9px;
    }



    .download-btn {
        font-size: 18px;
    }

    .gradient-text3 {
        color: #f0d491
    }

    .top-box {
        background-color: #f0d491;
        color: white;
        padding: 15px;
        background-image: linear-gradient(315deg, #cbb4d4 0%, #745a7f 25%, #745a7f 50%, #745a7f 75%, #33143e 100%);
        background-size: 100%;
        background-repeat: repeat;
    }

    .top-box h4{
        color: #f8f2fb;
        font-weight: bold;
        margin-bottom: 0px;
    }

    .details-box img {
        height: 410px;
    }

    .details-box img {
        width: 100%;
        object-fit: cover;
    }

    .second-img:hover {
        /**opacity: 0.9; */
        cursor: pointer;
    }

    .second-img {
        position: relative;
    }

    .second-img img {
        transition: .2s;
    }

    .second-img:hover img {
        transform: scale(0.94);
    }


    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(57, 57, 57, 0.75);
        top: 0;
        left: 0;
        transform: scale(0);
        transition: all 0.2s 0.1s ease-in-out;
        color: #fff;
        border-radius: 5px;
        /* center overlay text */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* hover */
    .second-img:hover .overlay {
        transform: scale(1);
    }
</style>

@endpush @section('content')

<!-- ======= Hero Section ======= -->
<section id="hero2" class="hero d-flex align-items-end">


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
      <a class="cool-btn-effect contact-reserve" style="font-size: 13px;" target="_blank" href="{{$home_settings->pdf_file}}">
        <i class="contact-recall"></i>
        <span>ملف المشروع pdf</span>
      </a>

    </li>

  </ul>
    <div class="container">
        <div class="row">

            <div class="col-lg-12 d-flex flex-row justify-content-start">
                <h2 style="font-size: 34px; line-height: 2; font-weight: 600;" class="gradient-text3">مخطط المشروع</h2>
            </div>

        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

    <script>
        $(document).ready(function(e) {

            var $loupe = $(".loupe"),
                loupeWidth = $loupe.width(),
                loupeHeight = $loupe.height();

            $(document).on("mouseenter", ".image-magnifier", function(e) {
                var $currImage = $(this),
                    $img = $('<img/>')
                    .attr('src', $('img', this).attr("src"))
                    .css({
                        'width': $currImage.width() * 2,
                        'height': $currImage.height() * 2
                    });

                $loupe.html($img).fadeIn(100);

                $(document).on("mousemove", moveHandler);

                function moveHandler(e) {
                    var imageOffset = $currImage.offset(),
                        fx = imageOffset.left - loupeWidth / 2,
                        fy = imageOffset.top - loupeHeight / 2,
                        fh = imageOffset.top + $currImage.height() + loupeHeight / 2,
                        fw = imageOffset.left + $currImage.width() + loupeWidth / 2;

                    $loupe.css({
                        'left': e.pageX - 75,
                        'top': e.pageY - 75
                    });

                    var loupeOffset = $loupe.offset(),
                        lx = loupeOffset.left,
                        ly = loupeOffset.top,
                        lw = lx + loupeWidth,
                        lh = ly + loupeHeight,
                        bigy = (ly - loupeHeight / 4 - fy) * 2,
                        bigx = (lx - loupeWidth / 4 - fx) * 2;

                    $img.css({
                        'left': -bigx,
                        'top': -bigy
                    });

                    if (lx < fx || lh > fh || ly < fy || lw > fw) {
                        $img.remove();
                        $(document).off("mousemove", moveHandler);
                        $loupe.fadeOut(100);
                    }
                }
            });
        });
    </script>

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row d-flex align-items-center justify-content-center" id="portfolio-header">

                <div class="col-lg-6 align-items-center justify-content-center">


                    <div class="top-box">
                        <h4 class="d-flex justify-content-center"> واجهة المشروع</h4>
                    </div>
                    <a href="/scheme-gallery">
                        <div class="row mt-2 details-box second-img">
                            <img class="img-fluid" src="/img/schem1.jpg">
                            <div class="overlay"><span>اضغط هنا لعرض الصور</span></div>
                        </div>
                    </a>
                </div>


                <div class="col-lg-6 justify-content-center">
                    <div class="top-box">
                        <h4 class="d-flex justify-content-center">الرسوم التفصيلية</h4>
                    </div>

                    <a href="/image-gallery">
                        <div class="row mt-2 details-box second-img">
                            <img class="img-fluid" src="/img/mobile-camera.jpg">
                            <div class="overlay"><span>اضغط هنا لعرض الصور</span></div>
                        </div>
                    </a>
                </div>

            </div>

            <!-- ======= Portfolio Section ======= -->
            <div hidden id="protoypes" class="protoypes" style="border-top: 0.5px solid rgb(187, 187, 187); padding-top: 20px;  margin-top: 25px;">
                <ul class="d-flex justify-content-center">
                    <li class="col-lg-4 col-xs-12">
                        <div class="b-card-container">
                            <div class="top-title-container">
                                <div class="top-title  gradient-text">{{$home_settings->protoype_A_title}}</div>
                            </div>
                            <div class="booking-card" onclick="location.href='/prototyp-A'" style="background-image: url('/storage/images_stduio/{{$home_settings->protoype_A_photo}}')">
                                <div class="informations-container">
                                    <h2 class="title">غرف النوم: {{$home_settings->A_rooms}}</h2>
                                    <h2 class="title" style="margin-top: 17px;">مساحة الشقق: {{$home_settings->protoype_A_bulding_area}} م<sup>2</sup></h2>
                                    <div class="more-information">
                                        <div class="info-and-date-container">
                                            <div class="box">
                                                <div class="top-title  gradient-text"> {{number_format($home_settings->protoype_A_price)}} ريال
                                                </div>
                                                <div class="top-title  gradient-text bottom-icon"><i class="go-left-arr">←</i></div>
                                            </div>

                                        </div>
                                        <p style="visibility: hidden;" class="disclaimer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi eveniet perferendis culpa. Expedita architecto nesciunt, rem distinctio</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="portfolio-info">
                            <!-- <h4>القطع المتاحة في فلل A</h4> -->
                            <input type="text" placeholder="بحث" id="mySearchInput1" class="searh_input" onkeyup="filterClassAFunction()">
                            <div class="categories-content">
                                <ul id="catA">

                                    @foreach($house_units_A as $v_u_A)

                                    <li>
                                        <div class="{{$v_u_A->isAvailable == 1  ? 'green-circle' : 'red-circle'}}"></div>

                                        <strong>{{$v_u_A->subtype}}</strong>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </li>


                    <li class="col-lg-4 col-xs-12">
                        <div class="b-card-container">
                            <div class="top-title-container">
                                <div class="top-title  gradient-text">{{$home_settings->protoype_B_title}}</div>
                            </div>
                            <div class="booking-card" onclick="location.href='/prototyp-B'" style="background-image: url('/storage/images_stduio/{{$home_settings->protoype_B_photo}}')">
                                <div class="informations-container">
                                    <h2 class="title">غرف النوم: {{$home_settings->B_rooms}} </h2>
                                    <h2 class="title" style="margin-top: 17px;">مساحة الشقق: {{$home_settings->protoype_B_bulding_area}} م<sup>2</sup></h2>
                                    <div class="more-information">
                                        <div class="info-and-date-container">
                                            <div class="box">
                                                <div class="top-title  gradient-text"> {{number_format($home_settings->protoype_B_price)}} ريال
                                                </div>
                                                <div class="top-title  gradient-text bottom-icon"><i class="go-left-arr">←</i></div>
                                            </div>

                                        </div>
                                        <p style="visibility: hidden;" class="disclaimer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi eveniet perferendis culpa. Expedita architecto nesciunt, rem distinctio</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-info">
                            <!-- <h4>القطع المتاحة في فلل B</h4> -->

                            <input type="text" placeholder="بحث" id="mySearchInput2" class="searh_input" onkeyup="filterClassBFunction()">
                            <div class="categories-content">
                                <ul id="catB">
                                    @foreach($house_units_B as $v_u_B)

                                    <li>
                                        <div class="{{$v_u_B->isAvailable == 1  ? 'green-circle' : 'red-circle'}}"></div>

                                        <strong>{{$v_u_B->subtype}}</strong>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                    </li>

                    <li class="col-lg-4 col-xs-12">

                        <div class="b-card-container">
                            <div class="top-title-container">
                                <div class="top-title  gradient-text">{{$home_settings->protoype_C_title}}</div>
                            </div>
                            <div class="booking-card" onclick="location.href='/prototyp-C'" style="background-image: url('/storage/images_stduio/{{$home_settings->protoype_C_photo}}')">
                                <div class="informations-container">
                                    <h2 class="title">غرف النوم: {{$home_settings->C_rooms}} </h2>
                                    <h2 class="title" style="margin-top: 17px;">مساحة الشقق: {{$home_settings->protoype_C_bulding_area}} م<sup>2</sup></h2>
                                    <div class="more-information">
                                        <div class="info-and-date-container">
                                            <div class="box">
                                                <div class="top-title  gradient-text"> {{number_format($home_settings->protoype_C_price)}} ريال
                                                </div>
                                                <div class="top-title  gradient-text bottom-icon"><i class="go-left-arr">←</i></div>
                                            </div>

                                        </div>
                                        <p style="visibility: hidden;" class="disclaimer">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi eveniet perferendis culpa. Expedita architecto nesciunt, rem distinctio</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-info">
                            <!-- <h4>القطع المتاحة في فلل C</h4> -->
                            <input type="text" placeholder="بحث" id="mySearchInput3" class="searh_input" onkeyup="filterClassCFunction()">
                            <div class="categories-content">

                                <ul id="catC">
                                    @foreach($house_units_C as $v_u_C)

                                    <li>
                                        <div class="{{$v_u_C->isAvailable == 1  ? 'green-circle' : 'red-circle'}}"></div>

                                        <strong>{{$v_u_C->subtype}}</strong>
                                    </li>
                                    @endforeach
                                </ul>


                            </div>
                        </div>

                    </li>

                </ul>

            </div>


        </div>
    </section>
    <!-- End Portfolio Details Section -->


</main>
<!-- End #main -->


<script>
    function filterClassAFunction() {
        var input, filter, ul, li, i;
        input = document.getElementById("mySearchInput1");
        filter = input.value.toUpperCase();
        div = document.getElementById("catA");
        li = div.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            txtValue = li[i].textContent || li[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }



    function filterClassBFunction() {
        var input, filter, ul, li, i;
        input = document.getElementById("mySearchInput2");
        filter = input.value.toUpperCase();
        div = document.getElementById("catB");
        li = div.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            txtValue = li[i].textContent || li[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }




    function filterClassCFunction() {
        var input, filter, ul, li, i;
        input = document.getElementById("mySearchInput3");
        filter = input.value.toUpperCase();
        div = document.getElementById("catC");
        li = div.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            txtValue = li[i].textContent || li[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>

@endsection