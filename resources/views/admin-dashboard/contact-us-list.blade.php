@extends('layouts._dashboard') @push('styles')


<style>

.message li {
    margin-bottom: 20px;
    border-bottom: 1px solid #e3e3e3;
    padding-bottom: 20px;
}

a {
    color: #2b2b2b;
}

.msg-img {
    margin-right: 20px;
}

.msg-img img {
    width: 60px;
    border-radius: 50%;
}

.message li:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

@media screen and (max-width: 575px) {
    .msg-img {
        margin-right: 12px;
    }
    .msg-img img {
        width: 50px;
    }
}
.card {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    border-radius: 4px;
    box-shadow: none;
    border: none;
    padding: 25px;
}
.mb-5, .my-5 {
    margin-bottom: 3rem!important;
}

.h1, .h2, .h3, .h5, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #2b2b2b;


}
.media-body .h5, .media-body h5 {
    font-size: 1.25rem;
    display: flex;
    justify-content: space-between;
}

.email-text{
  font-weight: 100;
color:#f0d491;
font-size: 15px;
}


.message i{


  margin-inline-end: 7px;

}

.cut-text { 
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  word-wrap:break-word;
  width: 70%;
}

.card-con:hover{

  color:#f0d491;
  cursor: pointer;
}

.card-title{
    color: grey;
}

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
                <li><a href="">لوجة التحكم</a></li>
                <li><a href="#" style="color:#3e4a5e;">طلبات التواصل الواردة</a></li>
            </ul>




            <div id="users" class="tabcontent">
                <div class="container">
                    <h3>طلبات التواصل الواردة</h3>
                </div>

                <section class="main-content">


                    <div class="container">

                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-start justify-content-start side-btns">
                                <button type="button" data-toggle="modal" href="#export-to-email" class="btn btn-sm  export-btn cool-btn-effect" id="">تصدير جميع الرسائل <i class="bi bi-arrow-bar-up"></i> </button>
                                <a href="/contacts-list/download-contacts" class="btn btn-sm export-btn export-btn2" id="">تحميل جميع الرسائل <i class="bi bi-arrow-bar-up"></i> </a>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-6 form-group md-form d-flex align-items-center" style="padding: 15px;">
                                <label style="margin-inline-end: 10px;" data-error="wrong" data-success="right">بحث: </label>
                                <input id="search-box" placeholder="بحث باستخدام اسم العميل أو المدينة أوالهاتف" type="text" required="required" class="form-control validate" onkeyup="searchByName()">
                            </div>


                        </div>



                        <div class="row">

                            <div class="col-lg-6 align-items-start justify-content-start side-btns">
                               
                            <?php 
                            
                            //$count_all = $contactUs_list_unread_list->count();
                            //$count_all = $count_all + $contactUs_list->count();
                            ?>
                                <h6 style="font-weight: 600;">اجمالي أعداد الرسائل:
                                <span class="circle-count">{{$toal_messages}}</span>
                                </h6>

                                <h6 style="margin-top:15px;font-weight: 600;">اجمالي أعداد الرسائل الجديدة:
                                <span class="circle-count">{{$contactUs_list_unread_list->count()}}</span>
                                </h6>

                                <h6 style="margin-bottom:15px; margin-top:15px;font-weight: 600;">اجمالي أعداد الرسائل السابقة:
                                <span class="circle-count">{{$toal_read_messages}}</span>
                                </h6>

                            </div>

                        </div>



                    </div>


                    @if($contactUs_list_unread_list->count()>0)

                    
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-white mb-5">
                                    <div class="card-heading clearfix border-bottom mb-4">
                                        <h5  id="blink" class="card-title"><i class="bi bi-envelope" style="font-size:18px; margin-left:6px;"></i>الرسائل الجديدة</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled message">
                                            @foreach($contactUs_list_unread_list as $i_message)

                                            <li>
                                                <div class="card-con" onclick="expandForm(this, '{{$i_message->id}}');">
                                                    
                                                <div style="">رسالة رقم {{$i_message->id}}#</div>
                                                    <div class="media align-items-center">
                                                        <div class="msg-img">
                                                            <img src="https://www.chitrakootweb.com/template/finders/img/testmonials/t-4.jpg" alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5><span><i class="bi bi-person"></i>{{$i_message->name}}</span><span class="float-left email-text">{{$i_message->email}}</span></h5>
                                                            <p style="color:grey"><i class="bi bi-telephone"></i>{{$i_message->phone}}</p>
                                                            <i class="bi bi-chat-square-text"></i>
                                                            <p class="cut-text" id="{{$i_message->id}}">
                                                            {{$i_message->message}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-white mb-5">
                                    <div class="card-heading clearfix border-bottom mb-4">
                                        <h5 class="card-title"><i class="bi bi-envelope-open" style="font-size:18px; margin-left:6px; margin-bottom:6px;"></i>الرسائل السابقة</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled message">
                                            @foreach($contactUs_list as $i_message)

                                            <li>
                                                <div class="card-con" onclick="expandForm(this, {{$i_message->id}});">
                                                    
                                                    <div style="">رسالة رقم {{$i_message->id}}#</div>
                                                    <div class="media align-items-center">
                                                        <div class="msg-img">
                                                            <img src="https://www.chitrakootweb.com/template/finders/img/testmonials/t-4.jpg" alt="">
                                                        </div>
                                                        <div class="media-body">
                                                            <h5><span><i class="bi bi-person"></i>{{$i_message->name}}</span><span class="float-left email-text">{{$i_message->email}}</span></h5>
                                                            <p style="color:grey"><i class="bi bi-telephone"></i>{{$i_message->phone}}</p>
                                                            <i class="bi bi-chat-square-text"></i>
                                                            <p class="cut-text" id="{{$i_message->id}}">
                                                            {{$i_message->message}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            @endforeach
                                        </ul>

                                    </div>
                                </div>
                                <div class="table-pagination">
                                    {!! $contactUs_list->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </section>




            </div>


        </section>
    </div>



    <script>
    function expandForm(element, textElemId) {


        $('.cut-text').css("white-space","nowrap");
        $('.cut-text').css("width","70%");


        document.getElementById(textElemId).style.width = "100%";
        document.getElementById(textElemId).style.whiteSpace = "normal";



        // submit the form    
    }
</script>

</main>
<!-- End #main -->


    <!-- Modal -->
    <div class="modal fade export-to-email-modal" id="export-to-email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-dismiss="modal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="width: 50%;">

            <div class="modal-content">
                <h4 style="margin-top: 35px;" class="d-flex justify-content-center">تصدير جميع الحجوزات</h4>
                <div class="modal-body">
                    <div style="font-weight: 700; margin-bottom: 15px; text-align: center;margin-bottom: 10px;margin-top: 10px;" class="d-flex justify-content-center">
                        تصدير جميع الرسائل إلى البريد الإلكتروني {{$user->email}}
                    </div>

                    <div class="card" id="sucess-export">
                        <div style="border-radius:200px; height: 150px; width: 150px; background: #F8FAF5; margin:0 auto;display: flex; justify-content: center;">
                            <i class=""><svg class="animated-check" viewBox="0 0 24 24">
                          <path d="M4.1 12.7L9 17.6 20.3 6.3" fill="none" />
                        </svg></i>
                        </div>
                        <h1>تم تصدير جميع الرسائل</h1>

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

<script>

  var blink = document.getElementById("blink");


  if(blink!=null){
      setInterval(() => {

      blink.style.color = (blink.style.color == "grey"? "lightgreen": "grey");



    }, 500);

  }





</script>


<script>

$(document).ready(function(e) {


        $.ajax({
            url: '{{ url('/contactUs-mark-as-read') }}',

            method: "get",


            success: function(data, status, xhr) {
              console.log("Sucess is "+ data);
            }
      });

});



$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#export-btn').on("click", function(event) {

        //var quantity = parent_row.find(".item-count").val();

        $.ajax({
            url: '{{ url('/contacts-list/export_excel') }}',

            method: "get",


            success: function(data, status, xhr) {

            }
        });

        $("#sucess-export").css("display", "block");

        $(this).removeAttr("id");


        $(".export-block").css("display", "none");

        $(".ok-btn").css("display", "block");

    });


</script>

@endsection
