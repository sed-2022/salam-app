@extends('layouts._dashboard')

@push('styles')


<style>
  .bg-error {
    background-color: #c30000;
  }

  .label-title {
    margin-bottom: 1.2%;
  }

  .alert-success {
    color: #a47947;
    background-color: #fff1d0;
    border-color: #c39f75;
    margin-top: 2%;
    font-weight: 600;
    font-size: 0.9em;
  }


  .alert-danger {
    margin-top: 2%;
    font-weight: 600;
    font-size: 0.9em;
  }

  .delete-btn:focus {

    color: #c39f75;
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

  .link-td {
    width: 210px;
    word-break: break-all;
  }
</style>


@endpush

@section('content')

<main id="main">
  <div class="buyer-control" style="background-color: white;">


    @include('layouts._admin_dashboard_panel')


    <section class="home-section">

      <ul class="breadcrumb" id="breadcrumb-title">
        <li><a href="">لوجة التحكم</a></li>
        <li><a href="#" style="color:#3e4a5e;">إعدادات التقارير الدورية</a></li>
      </ul>




      <div id="users" class="tabcontent">
        <div class="container">
          <h3>إعدادات التقارير الدورية</h3>
        </div>

        <section class="main-content">

          <div class="container">
            <div class="row">

              <div class="col-6 form-group md-form d-flex align-items-center" style="padding: 15px;">
                <label style="margin-inline-end: 10px;" data-error="wrong" data-success="right">بحث: </label>
                <input id="mySearchInput1" onkeyup="filterFunction()" placeholder="بحث بالعنوان" type="search" class="form-control validate">
              </div>

              <div class="col-6 d-flex align-items-center justify-content-end">


                <button data-toggle="modal" data-target="#add-vedio" style="font-size: 13px; padding: 5px; padding-left: 20px; padding-right: 20px; font-weight: 700; color:white;" class="btn cool-btn-effect" data-style="expand-right"><i style="font-weight: bold; margin-inline-end: 5px;" class="bi bi-bookmark-plus-fill"></i>إضافة فيديو تقرير جديد</button>

              </div>

            </div>

            <div class="row">
              @if(Session::has('success'))
              <div class="alert alert-success">
                {{Session::get('success')}}
              </div>
              @endif

            </div>
          </div>


          <div class="row d-flex justify-content-center">
            @if(Session::has('success-delete'))
            <div class="alert alert-danger" style="width: 95%;">
              {{Session::get('success-delete')}}
            </div>
            @endif

          </div>
      </div>


      <div class="container" style="overflow-x: scroll;">
        <table class="table-users" id="all-reports">
          <thead>
            <tr>
              <th>العنوان</th>
              <th>وصف مختصر</th>
              <th>رابط</th>
              <th>تاريخ النشر</th>
              <th>حذف</th>
            </tr>
          </thead>
          <tbody>
            @foreach($reports as $report)
            <tr>
              <td>
                <div class="user-info">
                  <div class="user-info__basic">
                    <h5 class="user_name search_element" data-uemail="{{$report->title}}">{{$report->title}}</h5>
                  </div>
                </div>
              </td>

              <td>{{$report->brief}}</td>
              <td class="link-td"><a href="{{$report->link}}" target="_blank"> {{$report->link}}</a></td>


              <td>{{$report->created_at}}</td>

              <td>


                <div class="dropdown show">
                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-gear-fill"></i>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <button class="dropdown-item" id="open-editing" data-title="{{$report->title}}" data-brief="{{$report->brief}}" data-link="{{$report->link}}" data-id="{{$report->id}}" data-toggle="modal" data-target="#edit-vedio"><i class="bi bi-pencil-square"></i>تعديل</button>

                    <form action="/delete-report/{{$report->id}}" class="delete-form" method="POST">
                      @csrf
                      @method('DELETE')

                      <button type="submit" onclick="return confirm('هل أنت متأكد من رغبتك في حذف هذا التقرير')" class="dropdown-item delete-btn" href=""><i class="bi bi-trash" style="font-size:16px"></i>حذف</button>
                    </form>

                  </div>
                </div>




              </td>
            </tr>

            @endforeach


          </tbody>
        </table>
      </div>
    </section>

    <div class="table-pagination">
      {!! $reports->links() !!}
    </div>


  </div>


  </section>
  </div>


  <!-- Modal -->
  <div class="modal fade aadd-vedio-modal" id="add-vedio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-dismiss="modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <form class="voucher-form" action="/add-report" method="post" novalidate>
        @csrf
        <div class="modal-content">
          <h4 style="margin-top: 5%;" class="d-flex justify-content-center">إضافة مقطع جديد</h4>
          <div class="modal-body">
            <div class="voucher-form-container">

              <div class="row">


                <div class="col-12 col-xs-12">
                  <div class="form-group" style="display: grid; margin-top: 10px;">
                    <label class="label-title">العنوان</label>
                    <div class="align-items-center" style="display: inline-flex;">
                      <input type="text" name="title" class="form-control" placeholder="عنوان التقرير">
                    </div>
                  </div>
                </div>


                <div class="col-12 col-xs-12">
                  <div class="form-group" style="display: grid; margin-top: 10px;">
                    <label class="label-title">وصف مختصر</label>
                    <div class="align-items-center" style="display: inline-flex;">
                      <input type="text" name="brief" class="form-control" name="d-val" placeholder="وصف مختصر جدًا حول التقرير">
                    </div>
                  </div>
                </div>


                <div class="col-12 col-xs-12">
                  <div class="form-group" style="display: grid; margin-top: 10px;">
                    <label class="label-title">رالط المقطع</label>
                    <div class="align-items-center" style="display: inline-flex;">
                      <input type="text" name="youtube-video" class="form-control" name="d-val" placeholder="https://www.youtube.com/example">
                    </div>
                  </div>
                </div>


              </div>

            </div>


          </div>

          <div style="display: block;" class="modal-footer">
            <div style="font-weight: 700;" class="d-flex justify-content-start">

              <button type="button" class="btn btn-light" style="border: 1px solid rgb(209, 209, 209);" onclick="uncheckAll()" data-dismiss="modal">إلغاء الأمر</button>
              <button type="submit" class="add-Prod-button btn btn-success">إنشاء</button>
            </div>

          </div>

        </div>
      </form>

    </div>

  </div>

  <!-- End of Modal -->



  <!-- Modal -->
  <div class="modal fade edit-vedio-modal" id="edit-vedio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-dismiss="modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <form class="voucher-form" action="" method="post" novalidate>
        @csrf @method('PUT')
        <div class="modal-content">
          <h4 style="margin-top: 5%;" class="d-flex justify-content-center">تعديل المقطع</h4>
          <div class="modal-body">
            <div class="voucher-form-container">

              <div class="row">


                <div class="col-12 col-xs-12">
                  <div class="form-group" style="display: grid; margin-top: 10px;">
                    <label class="label-title">العنوان</label>
                    <div class="align-items-center" style="display: inline-flex;">
                      <input type="text" name="title" class="form-control" placeholder="عنوان التقرير">
                    </div>
                  </div>
                </div>


                <div class="col-12 col-xs-12">
                  <div class="form-group" style="display: grid; margin-top: 10px;">
                    <label class="label-title">وصف مختصر</label>
                    <div class="align-items-center" style="display: inline-flex;">
                      <input type="text" name="brief" class="form-control" name="d-val" placeholder="وصف مختصر جدًا حول التقرير">
                    </div>
                  </div>
                </div>


                <div class="col-12 col-xs-12">
                  <div class="form-group" style="display: grid; margin-top: 10px;">
                    <label class="label-title">رالط المقطع</label>
                    <div class="align-items-center" style="display: inline-flex;">
                      <input type="text" name="youtube-video" class="form-control" name="d-val" placeholder="https://www.youtube.com/example">
                    </div>
                  </div>
                </div>


              </div>

            </div>


          </div>

          <div style="display: block;" class="modal-footer">
            <div style="font-weight: 700;" class="d-flex justify-content-start">

              <button type="button" class="btn btn-light" style="border: 1px solid rgb(209, 209, 209);" data-dismiss="modal">إلغاء الأمر</button>
              <button type="submit" class="add-Prod-button btn btn-success">تعديل</button>
            </div>

          </div>

        </div>
      </form>

    </div>

  </div>

  <!-- End of Modal -->


</main><!-- End #main -->

<script>
  $(document).on("click", "#open-editing", function() {


    var title = $(this).data('title');
    var brief = $(this).data('brief');
    var link = $(this).data('link');
    var id = $(this).data('id');

    console.log("title is " + title);

    $("#edit-vedio .modal-body input[name='title']").val(title);
    $("#edit-vedio .modal-body input[name='brief']").val(brief);
    $("#edit-vedio .modal-body input[name='youtube-video']").val(link);
    $("#edit-vedio form").attr('action', '/edit-report/' + id);




  });



  function filterFunction() {
    var input, filter, ul, td, i, parent;
    input = document.getElementById("mySearchInput1");
    filter = input.value.toUpperCase();
    div = document.getElementById("all-reports");


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


@endsection