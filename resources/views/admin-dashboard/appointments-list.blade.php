@extends('layouts._dashboard') @push('styles')


<style>
    .bg-error {
        background-color: #c30000;
    }
    
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
    
    .customcheck li {
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
        .side-btns {
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
    
    #mySearchInput1 {
        background-image: url('https://www.w3schools.com/css/searchicon.png');
        background-position: 10px 12px;
        background-repeat: no-repeat;
        background-size: 16px;
        width: 100%;
        font-size: 16px;
        padding: 6px 17px 9px 39px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
        border-radius: 3px;
    }

    .circle-count{
        color: darkred; 
        border: 1px solid #dadada;
        border-radius: 25px; 
        padding: 8px; 
        padding-top: 0px; 
        padding-bottom: 0px; 
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
                <li><a href="#" style="color:#3e4a5e;">طلبات الزيارة الواردة</a></li>
            </ul>

            <div id="all-choises" class="tabcontent">
                <div class="container">
                    <h3>طلبات الزيارة الواردة</h3>
                </div>

                <section class="main-content">


                    <div class="container" style="margin-top: 4%; margin-bottom: 4%;">
                        <div class="row">

                            <div class="col-lg-6 d-flex align-items-start justify-content-start side-btns">
                                <button type="button" data-toggle="modal" href="#export-to-email" class="btn btn-sm  export-btn cool-btn-effect" id="">تصدير جميع مواعيد الزيارة <i class="bi bi-arrow-bar-up"></i> </button>
                                <a href="/all-appointments-list/download-appointments" class="btn btn-sm export-btn export-btn2" id="">تحميل جميع مواعيد الزيارة <i class="bi bi-arrow-bar-up"></i> </a>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6 form-group md-form d-flex align-items-center" style="padding: 15px;">
                                <label style="margin-inline-end: 10px; margin-bottom:14px;" data-error="wrong" data-success="right">بحث: </label>

                                <input type="text" id="mySearchInput1" onkeyup="filterFunction()" placeholder="بحث برقم الهاتف" title="Type in a name">

                            </div>


                        </div>

                        <div class="row">

                            <div class="col-lg-6 align-items-start justify-content-start side-btns">
                               
                            <?php 
                            
                            $count_all = $visit_appointments_unread_list->count();
                            $count_all = $count_all + $visit_appointments->count();
                            ?>
                                <h6 style="font-weight: 600;">اجمالي أعداد طلبات الزيارة:
                                <span class="circle-count">{{$count_all}}</span>
                                </h6>

                                <h6 style="margin-top:15px;font-weight: 600;">اجمالي أعداد طلبات الزيارة الجديدة:
                                <span class="circle-count">{{$visit_appointments_unread_list->count()}}</span>
                                </h6>

                                <h6 style="margin-top:15px;font-weight: 600;">اجمالي أعداد طلبات الزيارة السابقة:
                                <span class="circle-count">{{$visit_appointments->count()}}</span>
                                </h6>

                            </div>

                        </div>
                    </div>

                    @if($visit_appointments_unread_list->count()>0)

                    <div class="container" style="overflow-x: scroll;">
                        <div id="blink" class="d-flex align-items-center justify-content-center" style="border: 1px solid lightgreen;"><i class="bi bi-envelope" style="font-size:18px; margin-left:6px;"></i>
                            <h4> جديد </h4>
                        </div>

                        <table class="table-users">
                            <thead>
                                <tr>
                                    <th><i style="margin-inline-end: 7px;">#</i>الرقم التسلسلي</th>

                                    <th><i class="bi bi-card-text" style="margin-inline-end: 7px;"></i>الاسم</th>

                                    <th><i class="bi bi-telephone" style="margin-inline-end: 7px;"></i>الهاتف</th>

                                    <th hidden><i class="bi bi-people" style="margin-inline-end: 7px;"></i>عدد الزوار</th>

                                    <th><i class="bi bi-calendar-event" style="margin-inline-end: 7px;"></i>تاريخ الإرسال</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($visit_appointments_unread_list as $vp)
                                <tr>
                                    <td>{{$vp->id}}</td>

                                    <td>
                                        <div class="user-info">
                                            <div class="user-info__basic">
                                                <h5 class="user_name">{{$vp->fullName}}</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="search_element">{{$vp->phone}}</td>
                                    <td>{{$vp->created_at}}</td>
                                    <td hidden >{{$vp->team_no}}</td>
                                    
                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>

                    @endif


                    <div class="container" style="overflow-x: scroll;">
                        <div class="d-flex align-items-center justify-content-center" style="background-color: gainsboro;"><i class="bi bi-envelope-open" style="font-size:18px; margin-left:6px; margin-bottom:6px;"></i>
                            <h4>السابق</h4>
                        </div>

                        <table class="table-users" id="all-users">
                            <thead>
                                <tr>
                                    <th><i style="margin-inline-end: 7px;">#</i>الرقم التسلسلي</th>

                                    <th><i class="bi bi-card-text" style="margin-inline-end: 7px;"></i>الاسم</th>

                                    <th><i class="bi bi-telephone" style="margin-inline-end: 7px;"></i>الهاتف</th>

                                    <th hidden><i class="bi bi-people" style="margin-inline-end: 7px;"></i>عدد الزوار</th>
                                    <th><i class="bi bi-calendar-event" style="margin-inline-end: 7px;"></i>تاريخ الإرسال</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($visit_appointments as $vp)
                                <tr>
                                    <td>{{$vp->id}}</td>

                                    <td>
                                        <div class="user-info">
                                            <div class="user-info__basic">
                                                <h5 class="user_name">{{$vp->fullName}}</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="search_element">{{$vp->phone}}</td>
                                    <td hidden>{{$vp->team_no}}</td>
                                    <td>{{$vp->created_at}}</td>

                                    
                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </section>

                <div class="table-pagination">
                    {!! $visit_appointments->links() !!}
                </div>


            </div>


        </section>
    </div>



    <!-- Modal -->
    <div class="modal fade export-to-email-modal" id="export-to-email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-dismiss="modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="width: 50%;">

            <div class="modal-content">
                <h4 style="margin-top: 35px;" class="d-flex justify-content-center">تصدير جميع الحجوزات</h4>
                <div class="modal-body">
                    <div style="font-weight: 700; margin-bottom: 15px; text-align: center;margin-bottom: 10px;margin-top: 10px;" class="d-flex justify-content-center">
                        تصدير جميع مواعيد الزيارة إلى البريد الإلكتروني {{$user->email}}
                    </div>

                    <div class="card" id="sucess-export">
                        <div style="border-radius:200px; height: 150px; width: 150px; background: #F8FAF5; margin:0 auto;display: flex; justify-content: center;">
                            <i class=""><svg class="animated-check" viewBox="0 0 24 24">
                          <path d="M4.1 12.7L9 17.6 20.3 6.3" fill="none" />
                        </svg></i>
                        </div>
                        <h1>تم تصدير جميع المواعيد</h1>



                    </div>


                    <div style="font-weight: 700; display:flex; margin-top: 7%; margin-bottom: 3%;" class="justify-content-center">


                        <button type="button" class="btn btn-light export-block" style="border: 1px solid rgb(209, 209, 209);" data-dismiss="modal">إلغاء الأمر</button>
                        <button class="btn export-block" id="export-btn" style="margin-inline-start: 6px; background-color: #c10000; border: 1px solid #f1f1f1; color:white;">تأكيد</button>
                        <button type="button" class="btn btn-light ok-btn" style="border: 1px solid rgb(209, 209, 209);" data-dismiss="modal">حسنًا</button>

                    </div>




                </div>

            </div>

        </div>

    </div>

    <!-- End Modal -->


</main>
<!-- End #main -->


<script>
    $(document).ready(function(e) {


        $.ajax({
            url: '{{ url('/appointments-mark-as-read') }}',

            method: "get",


            success: function(data, status, xhr) {

            }
        });

    });
</script>


<script defer>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#export-btn').on("click", function(event) {

        //var quantity = parent_row.find(".item-count").val();

        $.ajax({
            url: '{{ url('/all-appointments-list/export_excel') }}',

            method: "get",


            success: function(data, status, xhr) {

            }
        });

        $("#sucess-export").css("display", "block");

        $(this).removeAttr("id");


        $(".export-block").css("display", "none");

        $(".ok-btn").css("display", "block");

    });

    function filterFunction() {
        var input, filter, ul, td, i, parent;
        input = document.getElementById("mySearchInput1");
        filter = input.value.toUpperCase();
        div = document.getElementById("all-choises");


        td = div.getElementsByClassName("search_element");


        for (i = 0; i < td.length; i++) {

            txtValue = td[i].textContent || td[i].innerText;

            parent = td[i].closest("tr");

            if (txtValue.toUpperCase().indexOf(filter) > -1) {

                parent.style.display = "";

            } else {
                parent.style.display = "none";

            }
        }
    }
</script>



<script>
    var blink = document.getElementById("blink");


    if (blink != null) {
        setInterval(() => {
            blink.style.backgroundColor = (blink.style.backgroundColor == "lightgreen" ? "white" : "lightgreen");

            blink.style.color = (blink.style.color == "white" ? "lightgreen" : "white");



        }, 500);

    }
</script>

@endsection