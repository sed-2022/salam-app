@extends('layouts._dashboard') @push('styles')



<script src="{{ asset('js/custom-file-input.js') }}"></script>

<script>
</script>

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

    #certificate-row,
    #certificate-row2 {
        margin-top: 15px;
        display: flex;
        align-items: center;
    }

    .image-update {
        margin: auto;
        height: auto;
        width: auto;
        max-width: 90px;
        max-height: 90px;
    }

    .img-box {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border: 1px solid #e1e1e1;
        border-radius: 10px;
        padding: 5px;
        display: grid;
    }

    .input-content {
        width: 118%;
        /**text-align: center; */
        margin: 0 auto;
        /*padding: 0 0 1em 0;*/
    }

    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .inputfile+label {
        font-size: 1.25rem;
        /* 20px */
        font-weight: 700;
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        padding: 0.625rem 1.25rem;
        /* 10px 20px */
    }

    .no-js .inputfile+label {
        display: none;
    }

    .inputfile:focus+label,
    .inputfile.has-focus+label {
        outline: 1px dotted #000;
        outline: -webkit-focus-ring-color auto 5px;
    }

    .inputfile+label * {
        /* pointer-events: none; */
        /* in case of FastClick lib use */
    }

    .inputfile+label svg {
        width: 1em;
        height: 1em;
        vertical-align: middle;
        fill: currentColor;
        margin-top: -0.25em;
        /* 4px */
        margin-right: 0.25em;
        /* 4px */
    }

    .inputfile-6+label {
        color: #d3394c;
    }

    .inputfile-6+label {
        border: 1px solid #d3394c;
        background-color: #f1e5e6;
        border-radius: .25rem;
        padding: 0;
    }

    .inputfile-6:focus+label,
    .inputfile-6.has-focus+label,
    .inputfile-6+label:hover {
        border-color: #722040;
    }

    .inputfile-6+label span,
    .inputfile-6+label strong {
        padding: 0.625rem 1.25rem;
        /* 10px 20px */
        font-size: 15px;
    }

    .inputfile-6+label span {
        width: 200px;
        min-height: 2em;
        display: inline-block;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        vertical-align: top;
    }

    .inputfile-6+label strong {
        /**height: 100%; */
        height: 41%;
        color: #f1e5e6;
        background-color: #d3394c;
        display: inline-block;
    }

    .inputfile-6:focus+label strong,
    .inputfile-6.has-focus+label strong,
    .inputfile-6+label:hover strong {
        background-color: #722040;
    }

    @media (max-width: 768px) {
        .inputfile-6+label span {
            width: 100px;
        }

        #certificate-row,
        #certificate-row2 {
            justify-content: space-around;
        }
    }
</style>


@endpush @section('content')

<main id="main">
    <div class="buyer-control" style="background-color: white;">


        @include('layouts._admin_dashboard_panel')


        <section class="home-section">

            <ul class="breadcrumb" id="breadcrumb-title">
                <li><a href="/summary">لوجة التحكم</a></li>
                <li><a href="#" style="color:#3e4a5e;">إعدادات الجهات التمويلية</a></li>
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
                                    <h3 style="margin-bottom: 5%;" class="d-flex justify-content-start">تعديل
                                        إعدادات شركاء النجاح</h3>

                                    <form class="voucher-form" action="/edit-sucess-partners-settings" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div id="certificate-row2" class="row mt-4 mb-4">


                                            <div class="col-lg-6  col-xs-12 mb-3 d-flex justify-content-center" style="padding:0px">
                                                <div class="input-content">
                                                    <div class="">
                                                        <input type="file" name="logo" id="success" class="inputfile inputfile-6">
                                                        <label for="success"><span class="file-text"></span>

                                                            <strong>
                                                                <svg xmlns="https://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
                                                                    </path>
                                                                </svg>
                                                                رفع الصورة</strong></label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-xs-12 mb-3 d-flex justify-content-start">
                                                <button type="submit" class="btn btn-light"><i style="color:red; font-weight: 800;" class="bi bi-plus-lg"></i>اضف</button>
                                            </div>

                                        </div>
                                    </form>

                                </div>



                                <div class="row">
                                    @foreach($success_partners_settings as $item)

                                    <div class="col-lg-6 col-xs-6 d-flex align-items-center" style="margin-bottom: 10px;">

                                        <div class="col-lg-6 col-xs-6">
                                            <div class="img-box">
                                                <img class="image-update" src="/storage/images_stduio/{{$item->logo}}">


                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-xs-6">
                                            <a href="/delete-sucess-partners-logo/{{$item->id}}" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا الشعار؟')" class="btn btn-small btn-danger btn-visitor-delete">
                                                X
                                            </a>
                                        </div>

                                    </div>
                                    @endforeach

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


    var isFirstTime = true;



    function addLogo(counter_cer) {

        var itm = document.getElementById("certificate-row2");

        console.log(itm);
        //itm=itm[itm.length - 1];
        var cln = itm.cloneNode(true);

        if (isFirstTime) {
            isFirstTime = false;
            count_cert = counter_cer;
        }

        count_cert++;


        $(cln.getElementsByTagName("input")[1]).attr('id', "file-cert-new-" + count_cert);

        $(cln.getElementsByTagName("input")[0]).attr('name', "input-cert-title-new-" + count_cert);
        $(cln.getElementsByTagName("input")[0]).val("");
        $(cln.getElementsByTagName("input")[1]).attr('name', "file-cert-new-[" + count_cert + "]");
        $(cln.getElementsByTagName("label")).attr('for', "file-cert-new-" + count_cert);

        $(cln.getElementsByTagName("img")).attr('src', "{{ url('/storage/product/default.png') }}");

        //var qqq = document.querySelectorAll(cln+'input[1]');
        //itm.getElementsByTagName("input")[1];

        console.log(cln);
        //$(lastElement).attr('id', "file-cert-" + count_cert);
        document.getElementById("cert-section").appendChild(cln);

        var inputs = document.querySelectorAll('.inputfile');
        Array.prototype.forEach.call(inputs, function(input) {
            var label = input.nextElementSibling,
                labelVal = label.innerHTML;

            input.addEventListener('change', function(e) {
                var fileName = '';
                if (this.files && this.files.length > 1)
                    fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this
                        .files.length);
                else
                    fileName = e.target.value.split('\\').pop();

                if (fileName)
                    label.querySelector('span').innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });

            // Firefox bug fix
            input.addEventListener('focus', function() {
                input.classList.add('has-focus');
            });
            input.addEventListener('blur', function() {
                input.classList.remove('has-focus');
            });
        });


    }
</script>

@endsection