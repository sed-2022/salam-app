@extends('layouts.app')

@push('styles')


<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #d4c6b6;
        text-align: center;
        padding: 8px;
        color: #6b4e2d;
        width: 50%;
    }

    td:last-child,
    th:last-child {
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: rgba(164, 121, 71, 0.2);
    }

    .footer-area .single-footer-widget .social-info a {
        padding: 9px;
    }


    .promotion .promotion-title {
        font-size: 1.5rem;
        font-weight: bold;
        line-height: 1.6;
        color: #eedfbe;
    }


    .crop {
        width: 250px;
        height: 180px;
        margin: auto;
        margin-top: 2%;
        margin-bottom: 2%;
    }

    .crop img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .title {
        color: white;
        font-size: 14px;
        display: grid;
    }

    .top-title {
        font-weight: 700;
        font-size: 1.25em;
    }

    #hero2 {
        width: 100%;
        height: 50vh;
        background: url('../img/shutterstock_1923063716.jpg') center;
        background-size: cover;
        position: relative;
        padding: 0;
        background-repeat: no-repeat;
    }

    #hero2:before {
        content: "";
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }

    #hero2 h2 {
        margin-bottom: 0px;
        font-size: 34px;
        font-weight: 600;
        z-index: 1;
    }

    .breadcrumbs li {
        color: white;
        z-index: 1;
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
                <h2 class="sub-page-title">?????? ?????????? C</h2>
            </div>
        </div>

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <ol>
                <li><a href="/">???????????????? </a></li>
                <li>?????????????? ??????????????</li>
                <li>?????????? C</li>
            </ol>
        </div>
        <!-- End Breadcrumbs -->

    </div>

</section>
<!-- End Hero -->

<main id="main">

    <div class="container">

        <!-- ======= Features Section ======= -->
        <section id="features" class="features" style="padding-top: 40px;">

            <!-- Feature Tabs -->
            <div class="row feture-tabs" data-aos="fade-up">
                <div class="col-lg-12">

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#tab1">???????????? ????????????</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab2">???????????? ??????????</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#tab3">???????????? ????????????</a>
                        </li>
                    </ul>
                    <!-- End Tabs -->

                    <div class="row d-flex" style="margin-bottom: 2%; margin-top: 3%;">
                        <div class="col-lg-6 d-flex">
                            <h5 class="title">?????? ??????????: 200 ??<sup>2</sup></h5>

                            <h5 class="title" style="margin-inline-start: 2%; margin-inline-end: 2%;"> - </h5>

                            <h5 class="title">?????????? ??????????: 245 ??<sup>2</sup></h5>
                        </div>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="tab1">

                            <div class="row">

                                <div class="col-lg-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>???????????? ????????????</th>
                                                <th> ?????????????? ???????????????? (??)</th>
                                            </tr>
                                            @foreach($ground_floor_list as $item)

                                            <tr>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->length}} ??? {{$item->width}}</td>
                                            </tr>

                                            @endforeach


                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-container">
                                    <img src="/storage/images_stduio/{{$ground_floor_img->path}}" class="img-fluid" alt="">
                                </div>

                            </div>

                        </div>
                        <!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="tab2">
                            <div class="row">

                                <div class="col-lg-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>?????????? ??????????</th>
                                                <th> ?????????????? ???????????????? (??)</th>
                                            </tr>

                                            @foreach($first_floor_list as $item)

                                            <tr>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->length}} ??? {{$item->width}}</td>
                                            </tr>

                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-container">
                                    <img src="/storage/images_stduio/{{$first_floor_img->path}}" class="img-fluid" alt="">
                                </div>

                            </div>

                        </div>
                        <!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="tab3">
                            <div class="row">

                                <div class="col-lg-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>?????????? ????????????</th>
                                                <th> ?????????????? ???????????????? (??)</th>
                                            </tr>
                                            @foreach($second_floor_list as $item)

                                            <tr>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->length}} ??? {{$item->width}}</td>
                                            </tr>

                                            @endforeach
                                        </table>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6 image-container">
                                    <img src="/storage/images_stduio/{{$second_floor_img->path}}" class="img-fluid" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- End Tab 3 Content -->

                    </div>

                </div>


            </div>
            <!-- End Feature Tabs -->


            <div id="promotion" class="promotion" style="height: 100%; padding-top: 0px; padding-bottom: 10px;">

                <div class="row d-flex align-items-center" style="padding-top: 0px; height: 100%;">

                    <div class="col-lg-3 d-flex justify-content-center crop">
                        <img class="" src="/storage/images_stduio/{{$home_settings->protoype_C_photo}}" alt="Paris">
                    </div>

                    <div class="col-lg-5">

                        <span class="promotion-title">
                            ?????? ?????????? C
                        </span>


                        <div class="d-flex justify-content-start">
                            <h5 class="title text-center">
                                <span style="margin-top: 15px;">?????? ??????????</span>
                                <span style="margin-top: 5px;">{{$home_settings->C_rooms}} </span>
                            </h5>


                            <h1 style="margin: 8px;" class="h1-style gradient-text gradient-text2 d-flex align-items-center">|</h1>

                            <h5 class="title text-center">
                                <span style="margin-top: 15px;">?????????? ??????????</span>
                                <span style="margin-top: 5px;">{{$home_settings->protoype_C_bulding_area}} ??<sup>2</sup></span>

                            </h5>
                        </div>




                        <span hidden class="top-title  gradient-text"> {{number_format($home_settings->protoype_C_price)}}
                            ????????
                        </span>

                    </div>



                    <div class="col-lg-4 d-flex justify-content-center make-pointer-on-hover" onclick=" window.open('/storage/images_stduio/{{$home_settings->protoype_C_pdf}}','_blank')">
                        <div class="cool-btn-effect contact-btn-mainContainer">
                            <div class="btn-contact-container">
                                <div class="btn-contact d-flex align-items-center"><i class="bi bi-cloud-download" style="margin-inline-end: 10px;"></i>?????????? ????????????????</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



        </section>
        <!-- End Features Section -->
    </div>





</main>
<!-- End #main -->

@endsection