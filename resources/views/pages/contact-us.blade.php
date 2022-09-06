@extends('layouts.app')

@push('styles')


<style>
    .error {
        color: red;
        font-weight: 400;
        display: block;
        padding: 6px 0;
        font-size: 14px;
    }

    .form-control.error {
        border-color: red;
        padding: .375rem .75rem;
    }


    #hero2:before {
        background: rgba(13, 20, 26, 0.7);
    }


    #hero2 {
        height: 50vh;
        background: url("{{ asset('/img/conact-us-background.jpg') }}") top center;

        background-size: cover;
        position: relative;
        padding: 0;
        background-repeat: no-repeat;
    }


    .footer-area .single-footer-widget .social-info a {

        padding: 9px;
    }

    /**

.navbar a, .navbar a:focus{
    color:#f0d491;
}

.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover>a{
    color: #2b3d2d;
}

*/
</style>

@endpush
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero2" class="hero d-flex align-items-end">

    @include('layouts.partials.side-nav')

    <div class="container">
        <div class="row">

            <div class="col-lg-12 d-flex flex-row justify-content-start">
                <h2 style="font-size: 34px; line-height: 2; font-weight: 600; z-index:900;" class="gradient-text">تواصل معنا</h2>
            </div>

        </div>
    </div>

</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <div class="row">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
            </div>

            
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <form class="php-email-form" role="form" action="/send-message" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="الاسم" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="phone" placeholder="رقم الجوال" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="تفاصيل" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>


                                <button type="submit" class="cool-btn-effect">ارسال</button>
                            </div>

                        </div>
                    </form>

                </div>


                <div class="col-lg-5 d-flex justify-content-center">


                    <div class="row gy-4">

                        <div class="col-md-6 col-sm col-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h4>البريد الإلكتروني</h4>
                                <p>info@sabyagarden.com</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm col-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h4>اتصل بنا</h4>
                                <p style="direction: ltr;">+966568436226</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm col-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h4>العنوان</h4>
                                <p>جازان - صبيا</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm col-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h4>ساعات العمل</h4>
                                <p>السبت - الخميس<br>09:00PM - 9:00AM</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </section>
    <!-- End Contact Section -->
    <script>
        //onclick="submitForm(this);"
        function submitForm(btn) {
            // disable the button
            btn.disabled = true;
            // submit the form    
            btn.form.submit();
        }
    </script>


</main>
<!-- End #main -->

@endsection