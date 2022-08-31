@extends('layouts._dashboard') @push('styles')



<script src="{{ asset('js/custom-file-input.js') }}"></script>


<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    table input {
        text-align: center;
    }

    td,
    th {
        border: 1px solid #d4c6b6;
        text-align: center;
        padding: 8px;
        color: #6b4e2d;
        width: 50%;
        justify-content: center;
    }

    th {
        font-weight: 700;
    }

    td:last-child,
    th:last-child {
        text-align: center;
    }

    td:last-child {
        display: flex;
        width: 100%;
        align-items: center;
    }

    tr:nth-child(even) {
        background-color: rgba(164, 121, 71, 0.2);
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .footer-area .single-footer-widget .social-info a {
        padding: 9px;
    }

    .promotion .promotion-title {
        font-size: 1.5rem;
        font-weight: bold;
        line-height: 1.6;
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

    .btn-visitor-delete{
        font-size: 12px;
    }
</style>


@endpush @section('content')

<main id="main">
    <div class="buyer-control" style="background-color: white;">


        @include('layouts._admin_dashboard_panel')


        <section class="home-section">

            <ul class="breadcrumb" id="breadcrumb-title">
                <li><a href="/summary">لوجة التحكم</a></li>
                <li><a href="#" style="color:#3e4a5e;">إعدادات  تفاصيل الفلل B</a></li>

            </ul>




            <div id="users" class="tabcontent">

                <section class="main-content">


                    <div class="container" style="overflow-x: scroll;">


                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                                @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif
                            </div>
                        </div>




                        <div class="modal-content">
                            <div class="modal-body" style="padding: 4%">
                                <div class="row">

                                    <div class="section-title">
                                        <h1 class="gradient-text">تفاصيل شقق نموذج B</h1>
                                    </div>


                                    <form class="voucher-form" action="/edit-houses-b-detilas" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mt-4">

                                            <h5 class="mb-3">الطابق الأرضي</h5>
                                            <div class="col-lg-7">

                                                <div class="table-responsive">
                                                    <table class="table" id="table-ground-floor">
                                                        <tbody>
                                                            <tr>
                                                                <th>مكونات الوحدة</th>
                                                                <th> الأبعاد الداخلية (م)</th>
                                                            </tr>

                                                            @foreach($ground_floor_list as $item)

                                                            <tr>
                                                                <td>{{$item->title}}</td>
                                                                <td>{{$item->length}} ✕ {{$item->width}}</td>

                                                                <td><a title="حذف السطر" href="/delete-house-details-row/{{$item->id}}" class="btn btn-small btn-danger btn-visitor-delete"> X </a></td>
                                                             
                                                            </tr>
                                                            @endforeach

                                                            <tr>
                                                                <td><input placeholder="غرفة المعيشة" type="text" class="form-control" name="title-g[]" value=""></td>
                                                                <td><input placeholder="3.7" type="number" step="0.01" type="text" class="form-control" name="length-g[]" value="">
                                                                    ✕
                                                                    <input placeholder="4.3" type="number" step="0.01" type="text" class="form-control" name="width-g[]" value="">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-lg-7 col-xs-12 mb-3 d-flex justify-content-start">
                                                <button type="button" id="addBtnG" class="btn btn-light"><i style="color:red; font-weight: 800;" class="bi bi-plus-lg"></i>اضف المزيد</button>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                                <div class="form-group" style="display: grid; margin-top: 10px;margin-bottom: 10px;">
                                                    <label style="font-weight: 500;margin-bottom: 5px;">صورة الطابق الأرضي</label>
                                                    <div class="align-items-center" style="display: inline-flex;">
                                                        <input type="file" onchange="loadFile(event, 'g_image')" name="ground_floor_img" class="form-control" value="">
                                                    </div>

                                                </div>
                                                <p><img id="g_image" src="/storage/images_stduio/{{$ground_floor_img->path}}" class="img-fluid" /></p>
                                            </div>
                                        </div>




                                        <div class="row mt-5">

                                            <h5 class="mb-3">الطابق الأول</h5>
                                            <div class="col-lg-7">

                                                <div class="table-responsive">
                                                    <table class="table" id="table-first-floor">
                                                        <tbody>
                                                            <tr>
                                                                <th>الطابق الأول</th>
                                                                <th> الأبعاد الداخلية (م)</th>
                                                            </tr>

                                                            @foreach($first_floor_list as $item)

                                                            <tr>
                                                                <td>{{$item->title}}</td>
                                                                <td>{{$item->length}} ✕ {{$item->width}}</td>
                                                                <td><a title="حذف السطر" href="/delete-house-details-row/{{$item->id}}" class="btn btn-small btn-danger btn-visitor-delete"> X </a></td>

                                                            </tr>
                                                            @endforeach

                                                            <tr>
                                                                <td><input placeholder="غرفة المعيشة" type="text" class="form-control" name="title-f[]" value=""></td>
                                                                <td><input placeholder="3.7" type="number" step="0.01" type="text" class="form-control" name="length-f[]" value="">
                                                                    ✕
                                                                    <input placeholder="4.3" type="number" step="0.01" type="text" class="form-control" name="width-f[]" value="">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-lg-7 col-xs-12 mb-3 d-flex justify-content-start">
                                                <button type="button" id="addBtnF" class="btn btn-light"><i style="color:red; font-weight: 800;" class="bi bi-plus-lg"></i>اضف المزيد</button>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                                <div class="form-group" style="display: grid; margin-top: 10px;margin-bottom: 10px;">
                                                    <label style="font-weight: 500;margin-bottom: 5px;">صورة الطابق الأول</label>
                                                    <div class="align-items-center" style="display: inline-flex;">
                                                        <input type="file" onchange="loadFile(event, 'f_image')" name="first_floor_img" class="form-control" value="">
                                                    </div>

                                                </div>
                                                <p><img id="f_image" src="/storage/images_stduio/{{$first_floor_img->path}}" class="img-fluid" /></p>
                                            </div>
                                        </div>



                                        <div class="row mt-5">

                                            <h5 class="mb-3">الطابق الثاني</h5>
                                            <div class="col-lg-7">

                                                <div class="table-responsive">
                                                    <table class="table" id="table-second-floor">
                                                        <tbody>
                                                            <tr>
                                                                <th>الطابق الثاني</th>
                                                                <th> الأبعاد الداخلية (م)</th>
                                                            </tr>

                                                            @foreach($second_floor_list as $item)

                                                            <tr>
                                                                <td>{{$item->title}}</td>
                                                                <td>{{$item->length}} ✕ {{$item->width}}</td>
                                                                <td><a title="حذف السطر" href="/delete-house-details-row/{{$item->id}}" class="btn btn-small btn-danger btn-visitor-delete"> X </a></td>
                                                            </tr>
                                                            @endforeach
                                                            <tr>
                                                                <td><input placeholder="غرفة المعيشة" type="text" class="form-control" name="title-s[]" value=""></td>
                                                                <td><input placeholder="3.7" type="number" step="0.01" type="text" class="form-control" name="length-s[]" value="">
                                                                    ✕
                                                                    <input placeholder="4.3" type="number" step="0.01" type="text" class="form-control" name="width-s[]" value="">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-lg-7 col-xs-12 mb-3 d-flex justify-content-start">
                                                <button type="button" id="addBtnS" class="btn btn-light"><i style="color:red; font-weight: 800;" class="bi bi-plus-lg"></i>اضف المزيد</button>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                                <div class="form-group" style="display: grid; margin-top: 10px;margin-bottom: 10px;">
                                                    <label style="font-weight: 500;margin-bottom: 5px;">صورة الطابق الثاني</label>
                                                    <div class="align-items-center" style="display: inline-flex;">
                                                        <input type="file" onchange="loadFile(event, 's_image')" name="second_floor_img" class="form-control" value="">
                                                    </div>

                                                </div>
                                                <p><img id="s_image" src="/storage/images_stduio/{{$second_floor_img->path}}" class="img-fluid" /></p>
                                            </div>
                                        </div>


                                        <div style="margin-top: 20px;" class="d-flex justify-content-center">
                                            <button class="btn btn-success" type="submit">تحديث</button>
                                        </div>


                                    </form>

                                </div>




                            </div>

                        </div>


                    </div>
            </div>
        </section>

    </div>


    </section>
    </div>


</main>
<!-- End #main -->

<script>
    var rowIdx = 0;

    // jQuery button click event to add a row.
    $('#addBtnG').on('click', function() {

        // Adding a row inside the tbody.
        $('#table-ground-floor').append(`<tr id="R${++rowIdx}">
        <td><input placeholder="غرفة المعيشة" type="text" class="form-control"  name="title-g[]" value=""></td> <td><input placeholder="3.7" type="number" step="0.01" type="text" class="form-control"  name="length-g[]" value=""> ✕ <input placeholder="4.3" type="number" step="0.01" type="text" class="form-control"  name="width-g[]" value=""> </td>
        </tr>`);
    });



    var fRowIdx = 0;
    $('#addBtnF').on('click', function() {

        // Adding a row inside the tbody.
        $('#table-first-floor').append(`<tr id="R${++fRowIdx}">
       
        <td><input placeholder="غرفة المعيشة" type="text" class="form-control"  name="title-f[]" value=""></td> <td><input placeholder="3.7" type="number" step="0.01" type="text" class="form-control"  name="length-f[]" value=""> ✕ <input placeholder="4.3" type="number" step="0.01" type="text" class="form-control"  name="width-f[]" value=""> </td>
    
        </tr>`);
    });



    var sRowIdx = 0;
    $('#addBtnS').on('click', function() {

        // Adding a row inside the tbody.
        $('#table-second-floor').append(`<tr id="R${++sRowIdx}">
        <td><input placeholder="غرفة المعيشة" type="text" class="form-control"  name="title-s[]" value=""></td> <td><input placeholder="3.7" type="number" step="0.01" type="text" class="form-control"  name="length-s[]" value=""> ✕ <input placeholder="4.3" type="number" step="0.01" type="text" class="form-control"  name="width-s[]" value=""> </td>
        </tr>`);
    });
</script>


<script>
    var loadFile = function(event, outputId) {
        var image = document.getElementById(outputId);
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

@endsection