@extends('layouts.app') @push('styles')


<style>
    .alert-success {
        color: #a47947;
        background-color: #fff1d0;
        border-color: #c39f75;
        margin-top: 2%;
        font-weight: 600;
        font-size: 1.1em;
    }
</style>

@endpush @section('content')

<main id="main">

    <div id="booking" class="reserve-section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-cta">
                        <h1>حدد موعد الزيارة</h1>
                        <span style="color: white; line-height: 2; font-size: 1.1em;">فضلًا قم بتعبئة البيانات التالية لإعلامنا برغبتك في زيارة موقع المشروع وسيقوم فريق خدمة العملاء لدينا بالتواصل معك لتحديد موعد مناسب </span>
                    </div>
                    <div class="booking-form mt-4">
                        <form role="form" action="/submit-reservation" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">الاسم الكامل</span>
                                        <input class="form-control" type="text" name="fullName">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">الهاتف</span>
                                        <input class="form-control" type="text" name="phone" placeholder="05000000">
                                    </div>
                                </div>

                                <div class="col-md-2" hidden>
                                    <div class="form-group">
                                        <span class="form-label">عدد الفريق</span>
                                        <select class="form-control" name="team_no">
                                        <option selected>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>أكثر</option>
                                    </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>

                            </div>

                            <div class="row" style="justify-content: center; margin-top: 2%;">


                                <div class="col-md-4">
                                    <div class="form-btn">
                                        <button type="submit" class="submit-btn cool-btn-effect">تأكيد الموعد</button>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif

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