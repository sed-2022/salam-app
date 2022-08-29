@extends('layouts._dashboard') @push('styles')



  <!-- jQuery -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>



<style>
    @media screen and (max-width: 568px) {
        #export-to-email .modal-lg {
            margin-top: 10% !important;
            width: 100% !important;
            margin-bottom: 10% !important;
        }
    }

    
    .bg-error {
        background-color: #c30000;
    }
    /* The customcheck */
    
    .customcheck li{
        list-style: none;
    }
    .customcheck {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    /* Hide the browser's default checkbox */
    
    .customcheck input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }
    /* Create a custom checkbox */
    
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        /**background-color: #eee; */
        background-color: red;
        border-radius: 5px;
    }
    /* On mouse-over, add a grey background color */
    
    .customcheck:hover input~.checkmark {
        background-color: #ccc;
    }
    /* When the checkbox is checked, add a blue background */
    
    .customcheck input:checked~.checkmark {
        background-color: #02cf32;
        border-radius: 5px;
    }
    /* Create the checkmark/indicator (hidden when not checked) */
    
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }
    /* Show the checkmark when checked */
    
    .customcheck input:checked~.checkmark:after {
        display: block;
    }
    /* Style the checkmark/indicator */
    
    .customcheck .checkmark:after {
        left: 10px;
        top: 7px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    
    .house-type-section {
        height: auto;
        max-height: 70vh;
        overflow-y: auto;
        margin-bottom: 15%;
        border-top: 1px solid grey;
        border-bottom: 1px solid grey;
        border-left: 1px solid #b3b3b3;
    }
    
    .big-title {
        padding-top: 10px;
        border-top: 1px solid grey;
        padding-bottom: 10px;
        justify-content: center;
        display: flex;
        color: #5c5c5c;
    }
    
    @media screen and (max-width: 768px) {
        .house-type-section {
            border-right: 1px solid #b3b3b3;
        }
        .custom-btn {
            padding: 5px;
            padding-left: 20px;
            padding-right: 20px;
            font-weight: 700;
        }

        .side-btns{
            margin-top: 30px !important;
        }
    }

    #export-to-email .card h1 {
    color: #28a745;
    font-weight: 900;
    font-size: 18px;
    margin-bottom: 10px;
    display: flex; 
    justify-content: center;
  }

  #export-to-email .card p {
    color: #404F5E;
    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
    font-size: 20px;
    margin: 0;
  }

  #export-to-email .card i {
    color: #28a745;
    font-size: 100px;
    line-height: 243px;
    margin-left: 0px;
    align-items: center;
    display: flex;
  }

  #export-to-email .card {
    background: white;
    padding: 60px;
    border-radius: 4px;
    margin: 50px auto;
  }

    
    .animated-check {
        height: 1em;
        width: 1em;
    }
    
    .animated-check path {
        fill: none;
        stroke: #28a745;
        stroke-width: 2;
        stroke-dasharray: 23;
        stroke-dashoffset: 23;
        animation: draw 1s linear forwards;
        stroke-linecap: round;
        stroke-linejoin: round;
    }
    
    @keyframes draw {
        to {
            stroke-dashoffset: 0;
        }
    }

        
    #sucess-export {
        display: none;
    }
    
    .ok-btn {
        display: none;
    }

    .searh_input {
        width: 100%;
        box-sizing: border-box;
        background-image: url('searchicon.png');
        background-position: 14px 12px;
        background-repeat: no-repeat;
        padding: 3px 16px;
        border: none;
        border: 1px solid #ddd;
        text-align: right;
        margin-bottom: 11px;
        border-radius: 4px;
    }
    
    .searh_input:focus {
        outline: 3px solid #ddd;
    }


    
</style>


@endpush @section('content')

<main id="main">
    <div class="buyer-control" style="background-color: white;">


        @include('layouts._admin_dashboard_panel')


        <section class="home-section">

            <ul class="breadcrumb" id="breadcrumb-title">
                <li><a href="/summary">لوجة التحكم</a></li>
                <li><a href="#" style="color:#3e4a5e;">الفلل المحجوزة</a></li>
            </ul>




            <div id="users" class="tabcontent">
                <div class="container">
                    <h3>حجز الفلل في نموذج {{$type}}</h3>
                </div>

                <section class="main-content">
                    <form class="form-group" action="/update-housing-settings/{{$type}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')



                        <div class="container" style="margin-top: 4%; margin-bottom: 4%;">
                            <div class="row">


                                <div class="col-lg-6 d-flex align-items-center justify-content-start">
                                    <button type="submit" class="btn btn-success btn-lg btn-radius"><i class="bi bi-signpost"></i>  تحديث حجز النماذج</button>
                                </div>


                                <div class="col-lg-6 d-flex align-items-center justify-content-end side-btns">
                                    <button type="button" data-toggle="modal" href="#export-to-email" class="btn btn-sm  export-btn cool-btn-effect" id="">تصدير جميع الحجوزات <i class="bi bi-arrow-bar-up"></i> </button>
                                    <a  href="/housing-reservation/download-reservations" class="btn btn-sm export-btn export-btn2" id="">تحميل جميع الحجوزات <i class="bi bi-arrow-bar-up"></i> </a>
                                </div>

                            </div>


                            <div class="row">

                            <div class="col-lg-6 d-flex mt-4 align-items-center justify-content-start">
                                <input type="text" placeholder="بحث" id="mySearchInput1" class="searh_input" onkeyup="filterClassAFunction()">

                            </div>

                            </div>

                            <div class="mt-3">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                    @endif
                                </div>

                        </div>


                        <div class="container" style="overflow-x: scroll;">


                            <div class="row">
                                <h2 class="big-title">فلل {{$type}}</h2>
                                <div class="col-lg-12 house-type-section">

                                    <div class="row" id="categories">

                                        </br>
                                        <div class="col-lg-4" style="border-left: 1px solid grey; padding-top: 15px;">
                                        @foreach($house_units[0] as $hu)

                                            <label class="customcheck"><li>{{$hu->subtype}}</li>
                                                <input name="{{$type}}-{{$hu->id}}" type="checkbox" {{$hu->isAvailable == 1  ? 'checked' : ''}}>
                                                <span class="checkmark"></span>
                                            </label> 
                                        @endforeach
                                        </div>

                                        <div class="col-lg-4" style="border-left: 1px solid grey; padding-top: 15px;">
                                            @foreach($house_units[1] as $hu)

                                            <label class="customcheck"><li>{{$hu->subtype}}</li>
                                        <input name="{{$type}}-{{$hu->id}}" type="checkbox" {{$hu->isAvailable == 1  ? 'checked' : ''}}>
                                        <span class="checkmark"></span>
                                        </label> @endforeach
                                        </div>

                                        <div class="col-lg-4" style="border-left: 1px solid grey; padding-top: 15px;">
                                            @foreach($house_units[2] as $hu)

                                            <label class="customcheck"><li>{{$hu->subtype}}</li>
                                        <input name="{{$type}}-{{$hu->id}}" type="checkbox" {{$hu->isAvailable == 1  ? 'checked' : ''}}>
                                        <span class="checkmark"></span>
                                        </label> @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>


                    </form>

                </section>




            </div>


        </section>
    </div>


</main>
<!-- End #main -->



<!-- Modal -->
<div class="modal fade export-to-email-modal" id="export-to-email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-dismiss="modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="width: 50%;">

        <div class="modal-content">
            <h4 style="margin-top: 35px;" class="d-flex justify-content-center">تصدير جميع الحجوزات</h4>
            <div class="modal-body">
                <div style="font-weight: 700; margin-bottom: 15px; text-align: center;margin-bottom: 10px;margin-top: 10px;" class="d-flex justify-content-center">
                    تصدير جميع حجوزات الفلل إلى البريد الإلكتروني {{$user->email}}
                </div>

                <div class="card" id="sucess-export">
                    <div style="border-radius:200px; height: 150px; width: 150px; background: #F8FAF5; margin:0 auto;display: flex; justify-content: center;">
                        <i class=""><svg class="animated-check" viewBox="0 0 24 24">
                          <path d="M4.1 12.7L9 17.6 20.3 6.3" fill="none" />
                        </svg></i>
                    </div>
                    <h1>تم تصدير جميع الحجوزات</h1>



                </div>


                <div style="font-weight: 700; display:flex; margin-top: 7%; margin-bottom: 3%;" class="justify-content-center">


                    <button type="button" class="btn btn-light export-block" style="border: 1px solid rgb(209, 209, 209);" data-dismiss="modal">إلغاء الأمر</button>
                    <button class="btn export-block" id="export-btn" style="margin-inline-start: 6px; background-color: #c10000; border: 1px solid #f1f1f1; color:white;">تأكيد</button>
                    <button type="button" class="btn btn-light ok-btn" style="border: 1px solid rgb(209, 209, 209);"
                        data-dismiss="modal">حسنًا</button>

                </div>




            </div>

        </div>

    </div>

</div>

<!-- End Modal -->


<script>


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


    $('#export-btn').on("click", function(event) {

        //var quantity = parent_row.find(".item-count").val();

        $.ajax({
            url: '{{ url('/housing-reservation/export_excel') }}',

            method: "get",


            success: function(data, status, xhr) {

            }
        });

        $("#sucess-export").css("display", "block");

        $(this).removeAttr("id");


        $(".export-block").css("display", "none");

        $(".ok-btn").css("display", "block");

    });


    function filterClassAFunction() {
        var input, filter, ul, li, i, parent;
        input = document.getElementById("mySearchInput1");
        filter = input.value.toUpperCase();
        div = document.getElementById("categories");
        li = div.getElementsByTagName("li");

        for (i = 0; i < 1000; i++) {
            txtValue = li[i].textContent || li[i].innerText;

            parent = li[i].closest(".customcheck");

            console.log(li[i]);
            if (txtValue.toUpperCase().indexOf(filter) > -1) {

                parent.style.display = "";

            } else {
                parent.style.display = "none";

            }
        }
    }

</script>

@endsection