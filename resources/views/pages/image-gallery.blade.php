@extends('layouts.app')

@push('styles')


<style>

#hero2 {
    width: 100%;
    height: 40vh;
    background: url("../img/mobile-camera.jpg") top center;
    background-size: cover;
    position: relative;
    padding: 0;
    background-repeat: no-repeat;
}

</style>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<link href="{{ asset('vendor/fancybox/jquery.fancybox.min.css') }}" rel="stylesheet">

<script src="{{ asset('vendor/fancybox/jquery.fancybox.min.js') }}"></script>


@endpush
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero2" class="hero d-flex align-items-end">


    <div class="container">
        <div class="row">

            <div class="col-lg-12 d-flex flex-row justify-content-start">
                <h2 style="font-size: 34px; line-height: 2; font-weight: 700;" class="gradient-text">معرض الصور</h2>
            </div>

        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row d-flex align-items-center justify-content-center" id="portfolio-header">

                <div class="card-body">
                    <div class="clinic-details">
                        <ul>

                            <li>
                                <a href="/img/features/feature-01.jpg" data-fancybox="gallery2">
                                    <img src="/img/features/feature-01.jpg" alt="Feature Image">
                                </a>
                            </li>
                            <li>
                                <a href="/img/features/feature-01.jpg" data-fancybox="gallery2">
                                    <img src="/img/features/feature-01.jpg" alt="Feature Image">
                                </a>
                            </li>
                            <li>
                                <a href="/img/features/feature-01.jpg" data-fancybox="gallery2">
                                    <img src="/img/features/feature-01.jpg" alt="Feature Image">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

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