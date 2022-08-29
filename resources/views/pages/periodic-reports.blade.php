@extends('layouts.app')


<style>


#hero {
    width: 100%;
    height: 50vh !important;
    background: url("../img/main-header.jpg") center !important;
    background-size: cover;
    position: relative;
    padding: 0;
}

</style>


@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-end">

    @include('layouts.partials.side-nav')

        <div class="container">
            <div class="row">

                <div class="col-lg-12 d-flex flex-row justify-content-start">
                    <h2 style="font-size: 34px; line-height: 2; font-weight: 600; z-index:900;" class="gradient-text">التقارير الدورية</h2>
                </div>

            </div>
        </div>

    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Report Section ======= -->
        <section id="report" class="report section-bg" style="padding-top: 40px;">


            <!------ Include the above in your HEAD tag ---------->

            <div class="container">
                <div class="row mt-4">

                @foreach($reports as $report)

                <div class="col-md-4">
                        <div class="card">
                            <div class="card-image">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="100%" height="200" src="{{$report->link}}" frameborder="0" allowfullscreen></iframe>
                                    <div class="content">
                                        <h6>{{$report->brief}}</h6>

                                    </div>
                                </div>

                            </div>
                            <!-- card image -->
                            <div class="card-content">
                                <h2 class="card-title">{{$report->title}}</h2>
                            </div>
                            <!-- card content -->
                        </div>
                    </div>
                @endforeach



                </div>



            </div>
            <!--end container-->
        </section>
        <!-- End Report Section -->


        <script>
            $(function() {

                $('#show').on('click', function() {
                    $('.card-reveal').slideToggle('slow');
                });

                $('.card-reveal .close').on('click', function() {
                    $('.card-reveal').slideToggle('slow');
                });
            });
        </script>


    </main>
    <!-- End #main -->

@endsection
