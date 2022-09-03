@extends('layouts.app') @push('styles')


<style>
    .booking-form .form-control {
        padding-top: 10px;
    }

    h4 {
        margin-top: 10px;
        font-weight: 800;
    }

    .flex-container {
        display: flex;
        flex-direction: column;
        min-height: 140vh;
        overflow: auto;
    }

    #booking:before {
        background: rgba(26, 19, 13, 0.7);
    }

    #booking {
        background-image: url("./img/reserve-house-background.jpg");
    }


    .alert-success {
        color: #a47947;
        background-color: #fff1d0;
        border-color: #f0d491;
        margin-top: 2%;
        font-weight: 600;
        font-size: 1.1em;
    }


    @media only screen and (max-width: 767px) {
        .booking-form .form-group {
            width: 55.2%;
        }
        .booking-form .form-btn {
            justify-content: center;
            display: flex;
        }

        .form-btn-new {
            width: 55%;
        }

        .booking-form h4 {
            margin-inline-end: 20px;
        }

        .flex-container {
            min-height: 115vh;
        }

        .booking-form select.form-control+.select-arrow{
            height: 52px;
            line-height: 50px;
            bottom: 27px;
        }
    }
</style>

@endpush @section('content')
<main id="main">
    <div id="booking" class="reserve-section flex-container">
        <div class="section-center">
            <div class="container">


                <div class="row">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                    @endif
                </div>

                <div class="row">
                    <div class="booking-cta">
                        <h1>احجز الآن</h1>
                    </div>
                    <div class="booking-form">
                        <form role="form" action="/choose-prefered-type" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row d-flex justify-content-center">

                                <div class="col-md-6">
                                    <h4 class="gradient-text">الاسم كامل</h4>
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="fullName">
                                    </div>
                                </div>

                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6">
                                    <h4 class="gradient-text">رقم الهاتف</h4>

                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="05xxxxxx" name="phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">

                                <div class="col-md-6">
                                    <h4 class="gradient-text">فئة الوحدة</h4>
                                    <div class="form-group">
                                        <select class="form-control" name="type">
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>الجميع</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>



                            <div class="row d-flex justify-content-center show-on-mobile hide-on-desktop">
                                <div class="col-md-6">
                                    <h4 style="visibility: hidden;" class="gradient-text">رقم الهاتف</h4>

                                    <div class="form-btn-new">
                                        <button class="submit-btn cool-btn-effect">حفظ وإرسال</button>
                                    </div>
                                </div>
                            </div>


                            <div class="row d-flex justify-content-center hide-on-mobile">


                                <div class="col-md-2" style="padding-top: 10px;">
                                    <div class="form-btn">
                                        <button class="submit-btn cool-btn-effect">حفظ وإرسال</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


</main>
<!-- End #main -->


@endsection