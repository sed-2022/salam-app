@extends('layouts._dashboard') @push('styles')


<style>
    .bg-error {
        background-color: #c30000;
    }

    .form-group label {
        margin-bottom: 7px
    }

    .add-Prod-button {
        background-color: #c39f75;
        border: none;
    }

    .add-Prod-button:hover {
        background-color: #a47947;
    }
</style>


@endpush @section('content')

<main id="main">
    <div class="buyer-control" style="background-color: white;">


        @include('layouts._admin_dashboard_panel')


        <section class="home-section">

            <ul class="breadcrumb" id="breadcrumb-title">
                <li><a href="/summary">لوجة التحكم</a></li>
                <li><a href="#" style="color:#3e4a5e;">إعدادات الصفحة الرئيسية</a></li>
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
                        <form class="voucher-form" action="/edit-home-page-settings" method="post" enctype="multipart/form-data">
                            @csrf @method('PUT')

                            <div class="modal-content">
                                <div class="modal-body" style="padding: 4%">
                                    <div class="row">
                                        <h3 style="margin-bottom: 5%;" class="d-flex justify-content-start">تعديل إعدادات الصفحة الرئيسية</h3>


                                        <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label style="font-weight: 500;">صورة السلايدر الأولى</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="file" onchange="loadFile(event, 'f_slider')" name="first_slider_photo" class="form-control" value="{{$home_settings->first_slider_photo}}">
                                                </div>
                                                <small style="margin-top:10px">اختر صورة بحجم 2300 * 1396 حتى تصبح جميع الصور متطابقة</small>
                                            </div>


                                            <p><img id="f_slider" src="/storage/images_stduio/{{$home_settings->first_slider_photo}}" class="img-fluid" /></p>
                                        </div>


                                        <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label style="font-weight: 500;">صورة السلايدر الثانية</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="file" onchange="loadFile(event, 's_slider')" name="second_slider_photo" class="form-control" value="{{$home_settings->second_slider_photo}}">
                                                </div>
                                                <small style="margin-top:10px">اختر صورة بحجم 2300 * 1396 حتى تصبح جميع الصور متطابقة</small>
                                            </div>


                                            <p><img id="s_slider" src="/storage/images_stduio/{{$home_settings->second_slider_photo}}" class="img-fluid" /></p>
                                        </div>


                                        <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label style="font-weight: 500;">صورة السلايدر الثالثة</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="file" onchange="loadFile(event, 't_slider')" name="third_slider_photo" class="form-control" value="{{$home_settings->third_slider_photo}}">
                                                </div>
                                                <small style="margin-top:10px">اختر صورة بحجم 2300 * 1396 حتى تصبح جميع الصور متطابقة</small>
                                            </div>

                                            <p><img id="t_slider" src="/storage/images_stduio/{{$home_settings->third_slider_photo}}" class="img-fluid" /></p>
                                        </div>

                                        <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label>ملف pdf</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="file" name="pdf_file" class="form-control" value="{{$home_settings->pdf_file}}">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-12 col-xs-12">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">نبذه عن السلام</label>
                                                <div class="align-items-center" style="display: inline-flex;">

                                                    <textarea id="txtid" name="about_sabya" rows="4" cols="50" class="form-control">{{$home_settings->about_sabya}}</textarea>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label style="font-weight: 500;">الصورة</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="file" onchange="loadFile(event, 'about_sabya_photo_id')" name="about_sabya_photo" class="form-control" value="{{$home_settings->about_sabya_photo}}">
                                                </div>
                                            </div>

                                            <p class="mt-2"><img id="about_sabya_photo_id" src="/storage/images_stduio/{{$home_settings->about_sabya_photo}}" class="img-fluid" /></p>
                                        </div>


                                        <div class="col-lg-12 d-flex" style="border-top: 1px solid grey; margin-top: 25px; padding-top: 25px; padding-bottom: 25px;">

                                            <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                                <div class="form-group" style="display: grid; margin-top: 10px;">
                                                    <label class="label-title">المساحة م2</label>
                                                    <div class="align-items-center" style="display: inline-flex;">
                                                        <input type="text" name="area_number" class="form-control" value="{{$home_settings->area_number}}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                                <div class="form-group" style="display: grid; margin-top: 10px;">
                                                    <label class="label-title">عدد الوحدات</label>
                                                    <div class="align-items-center" style="display: inline-flex;">
                                                        <input type="text" name="units_number" class="form-control" value="{{$home_settings->units_number}}">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                                <div class="form-group" style="display: grid; margin-top: 10px;">
                                                    <label class="label-title">المرافق العامة</label>
                                                    <div class="align-items-center" style="display: inline-flex;">
                                                        <input type="text" name="facilites_number" class="form-control" value="{{$home_settings->facilites_number}}">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>



                                    <div class="col-lg-12 col-xs-12" style="margin: 5px; border-top: 1px solid grey; margin-top: 25px; padding-top: 25px; padding-bottom: 25px;">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label class="label-title">عن المطور</label>
                                            <label style="font-weight: 500;">العنوان</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="text" name="about_developer_title" class="form-control" value="{{$home_settings->about_developer_title}}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">المحتوى</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <textarea id="txtid" name="about_developer_content" rows="4" cols="50" class="form-control">{{$home_settings->about_developer_content}}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-xs-12" style="margin: 5px;  padding-top: 25px; padding-bottom: 25px;">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">النوع الأول</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="text" name="about_developer_more" class="form-control" value="{{$home_settings->about_developer_more}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xs-12" style="margin: 5px;  padding-bottom: 25px;">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">النوع الثاني</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="text" name="another_about_developer_more" class="form-control" value="{{$home_settings->about_developer_more}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">الصورة</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="file" onchange="loadFile(event, 'about_developer_photo_id')" name="about_developer_photo" class="form-control">
                                            </div>
                                        </div>

                                        <p class="mt-3"><img src="{{$home_settings->about_developer_photo}}" id="about_developer_photo_id" class="img-fluid" /></p>
                                    </div>


                                    <div class="col-lg-12 col-xs-12" style="margin: 5px; border-top: 1px solid grey; margin-top: 25px; padding-top: 25px; padding-bottom: 25px;">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label class="label-title">نماذج الفلل</label>
                                            <label style="font-weight: 500;">عنوان النموذج الأول</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="text" name="protoype_A_title" class="form-control" value="{{$home_settings->protoype_A_title}}">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">صورة النموذج الأول</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="file" onchange="loadFile(event, 'protoype_A_photo_id')" name="protoype_A_photo" class="form-control" value="{{$home_settings->protoype_A_photo}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <p class="mt-2"><img id="protoype_A_photo_id" src="/storage/images_stduio/{{$home_settings->protoype_A_photo}}" class="img-fluid" /></p>
                                        </div>

                                    </div>


                                    <div class="col-lg-12 d-flex">

                                        <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">مساحة أرض النموذج الأول</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="text" name="protoype_A_area" class="form-control" value="{{$home_settings->protoype_A_area}}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">مساحة بناء النموذج الأول</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="text" name="protoype_A_bulding_area" class="form-control" value="{{$home_settings->protoype_A_bulding_area}}">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">سعر النموذج الأول</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="text" name="protoype_A_price" class="form-control" value="{{$home_settings->protoype_A_price}}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-lg-12 col-xs-12" style="margin: 5px">

                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">ملف pdf للنموذج الأول</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="file" name="protoype_A_pdf" class="form-control" value="{{$home_settings->protoype_C_photo}}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-xs-12" style="margin: 5px; border-top: 1px solid grey; margin-top: 25px; padding-top: 25px; padding-bottom: 25px;">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label class="label-title">نماذج الفلل</label>
                                            <label style="font-weight: 500;">عنوان النموذج الثاني</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="text" name="protoype_B_title" class="form-control" value="{{$home_settings->protoype_B_title}}">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">صورة النموذج الثاني</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="file" onchange="loadFile(event, 'protoype_B_photo_id')" name="protoype_B_photo" class="form-control" value="{{$home_settings->protoype_B_photo}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <p class="mt-2"><img id="protoype_B_photo_id" src="/storage/images_stduio/{{$home_settings->protoype_B_photo}}" class="img-fluid" /></p>
                                        </div>

                                    </div>


                                    <div class="col-lg-12 d-flex">

                                        <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">مساحة أرض النموذج الثاني</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="text" name="protoype_B_area" class="form-control" value="{{$home_settings->protoype_B_area}}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">مساحة بناء النموذج الثاني</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="text" name="protoype_B_bulding_area" class="form-control" value="{{$home_settings->protoype_B_bulding_area}}">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">سعر النموذج الثاني</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="text" name="protoype_B_price" class="form-control" value="{{$home_settings->protoype_B_price}}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-12 col-xs-12" style="margin: 5px">

                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">ملف pdf للنموذج الثاني</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="file" name="protoype_B_pdf" class="form-control" value="{{$home_settings->protoype_C_photo}}">
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-lg-12 col-xs-12" style="margin: 5px; border-top: 1px solid grey; margin-top: 25px; padding-top: 25px; padding-bottom: 25px;">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label class="label-title">نماذج الفلل</label>
                                            <label style="font-weight: 500;">عنوان النموذج الثالث</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="text" name="protoype_C_title" class="form-control" value="{{$home_settings->protoype_C_title}}">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">صورة النموذج الثالث</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="file" name="protoype_C_photo" onchange="loadFile(event, 'protoype_C_photo_id')" class="form-control" value="{{$home_settings->protoype_C_photo}}">
                                            </div>
                                        </div>


                                        <div class="col-lg-4">
                                            <p class="mt-2"><img id="protoype_C_photo_id" src="/storage/images_stduio/{{$home_settings->protoype_C_photo}}" class="img-fluid" /></p>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 d-flex">

                                        <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">مساحة أرض النموذج الثالث</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="text" name="protoype_C_area" class="form-control" value="{{$home_settings->protoype_C_area}}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">مساحة بناء النموذج الثالث</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="text" name="protoype_C_bulding_area" class="form-control" value="{{$home_settings->protoype_C_bulding_area}}">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-lg-4 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label class="label-title">سعر النموذج الثالث</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="text" name="protoype_C_price" class="form-control" value="{{$home_settings->protoype_C_price}}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>




                                    <div class="col-lg-12 col-xs-12" style="margin: 5px">

                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">ملف pdf للنموذج الثالث</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="file" name="protoype_C_pdf" class="form-control" value="{{$home_settings->protoype_C_photo}}">
                                            </div>
                                        </div>
                                    </div>





                                    <div class="col-lg-12 col-xs-12" style="border-top: 1px solid grey; margin-top: 25px; padding-top: 25px; padding-bottom: 25px;">

                                        <div class="form-group" style="display: grid; margin-top: 10px;">
                                            <label style="font-weight: 500;">صورة الخط الفاصل منازل فاخرة في السلام</label>
                                            <div class="align-items-center" style="display: inline-flex;">
                                                <input type="file" name="promotional_section" onchange="loadFile(event, 'promotional_section_id')" class="form-control" value="">
                                            </div>
                                        </div>

                                        <p class="mt-2"><img id="promotional_section_id" src="/storage/images_stduio/{{$home_settings->promotional_section}}" class="img-fluid" /></p>
                                    </div>



                                </div>

                                <div style="display: block;" class="modal-footer">
                                    <div style="font-weight: 700;" class="d-flex justify-content-start">

                                        <button type="submit" class="btn add-Prod-button">تعديل الإعدادت</button>
                                    </div>

                                </div>

                            </div>
                        </form>
                    </div>
                </section>

            </div>


        </section>
    </div>


</main>
<!-- End #main -->

<script>
    $('input[type="file"]').change(function(event) {
        var fileSize = this.files[0].size;
        fileSize = fileSize / 1024;
        var maxAllowedSize = 6144;
        // check the file size if its greater than your requirement
        if (fileSize > maxAllowedSize) {
            alert('الرجاء تحميل صورة بحجم أصغر');
            $(this).val("");
            //console.log($(this).val);
        }


    });
</script>


<script>
    var loadFile = function(event, outputId) {
        var image = document.getElementById(outputId);
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>


@endsection