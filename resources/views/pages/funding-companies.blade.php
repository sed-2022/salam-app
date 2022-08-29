@extends('layouts.app')


<style>
    #hero2:before {
        background: rgba(13, 20, 26, 0.7);
    }

    #hero2 {
        height: 50vh !important;
        background: url("{{ asset('/img/funding-company-background.jpg') }}") top center !important;
        background-size: cover;
        position: relative;
        padding: 0;
    }
</style>


@section('content')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero2" class="hero d-flex align-items-end">

    @include('layouts.partials.side-nav')

    <div class="container">
        <div class="row">

            <div class="col-lg-12 d-flex flex-row justify-content-start">
                <h2 style="font-size: 34px; line-height: 2; font-weight: 600; z-index:900" class="gradient-text
                    ">الجهات التمويلية</h2>
            </div>

        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= Clients2 Section ======= -->
    <section id="clients2" class="clients2 section-bg">
        <div class="container" data-aos="zoom-in">

            <div class="row">


                @foreach($funding_page_settings as $item)
                <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="/storage/images_stduio/{{$item->logo}}" class="img-fluid bg-client-img" alt="">
                </div>

                @endforeach


            </div>



        </div>



    </section>
    <!-- End Clients2 Section -->





</main>
<!-- End #main -->


@endsection