@extends('layouts._dashboard') @push('styles')


<style>
    .bg-error {
        background-color: #c30000;
    }
    
    .form-group label {
        margin-bottom: 7px
    }
    
    .add-Prod-button {
        background-color: #cbb4d4;
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
                <li><a href="#" style="color:#3e4a5e;">إعدادات مخطط المشروع</a></li>
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
                        <form class="voucher-form" action="/edit-project-scheme-settings" method="post" enctype="multipart/form-data">
                            @csrf @method('PUT')

                            <div class="modal-content">
                                <div class="modal-body" style="padding: 4%">
                                    <div class="row">
                                        <h3 style="margin-bottom: 5%;" class="d-flex justify-content-start">تعديل إعدادات مخطط المشروع</h3>



                                        <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 10px;">
                                                <label>ملف pdf</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="file" name="pdf_file" class="form-control" value="{{$project_page_settings->pdf_file}}">
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-lg-12 col-xs-12" style="margin: 5px">
                                            <div class="form-group" style="display: grid; margin-top: 30px;">
                                                <label>صورة المخطط</label>
                                                <div class="align-items-center" style="display: inline-flex;">
                                                    <input type="file" name="scheme_img" class="form-control" value="{{$project_page_settings->scheme_img}}">
                                                </div>
                                            </div>
                                        </div>


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

@endsection