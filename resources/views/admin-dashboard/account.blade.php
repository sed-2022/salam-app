@extends('layouts._dashboard')

@push('styles')



@endpush

@section('content')

<main id="main">
  <div class="buyer-control" style="background-color: white;">


    @include('layouts._admin_dashboard_panel')


    <section class="home-section">

      <ul class="breadcrumb" id="breadcrumb-title">
        <li><a href="/summary">{{ __('home.dashboard_title') }}</a></li>
        <li><a href="#" style="color:#3e4a5e;">جميع المشترين</a></li>
      </ul>



      <div id="account" class="tabcontent">
        <h3>حسابي</h3>
        <div class="row">
          <div class="col-lg-10 col-md-10 col-xs-12 d-flex justify-content-center">

            <form action="/update-admin-account" method="POST">
              @csrf
              @method('PUT')

              <div class="row">
                @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
                @endforeach
              </div>

              <div class="row">
                @if(Session::has('success'))
                <div class="alert alert-success">
                  {{Session::get('success')}}
                </div>
                @endif
              </div>

              <div class="row order-form">
                <div class="row d-flex justify-content-center">
                  <label style="font-weight: 900; margin:15px; padding-bottom:15px; border-bottom: 1px solid grey;">نفاصيل
                    تفاصيل حساب الأدمن </label>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12 col-xs-12 mb-3 required">
                    <label class="control-label" for="validationTooltip01">الاسم</label>
                    <input disabled type="text" class="form-control" required="required" name="first_name" value="{{$user->name}}">
                  </div>
                </div>

                <div class="col-lg-12 col-md-12 col-xs-12 mb-3 required">
                  <label class="control-label" for="validationTooltip01">البريد الإلكتروني</label>
                  <input disabled type="text" class="form-control" required="required" name="email" value="{{$user->email}}">
                </div>

                <fieldset>
                  <legend>تغيير كلمة المرور</legend>

                  <div class="col-lg-12 col-md-12 col-xs-12 mb-3 required">
                    <label class="control-label" for="password">تغيير كلمة المرور الحالية</label>
                    <input type="password" id="password" class="form-control" required="required" name="current_password" value="">
                  </div>




                  <div class="col-lg-12 col-md-12 col-xs-12 mb-3 required">
                    <label class="control-label" for="password">كلمة المرور الجديدة</label>
                    <input type="password" id="new_password" class="form-control" required="required" name="new_password" value="">
                  </div>


                  <div class="col-lg-12 col-md-12 col-xs-12 mb-3 required">
                    <label class="control-label" for="password">تأكيد كلمة المرور </label>
                    <input type="password" id="new_confirm_password" class="form-control" required="required" name="new_confirm_password" value="">
                  </div>

                </fieldset>


                <div style="margin-top: 20px;" class="d-flex justify-content-center">
                  <button class="btn btn-success" type="submit">تحديث</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>


    </section>
  </div>


</main><!-- End #main -->



@endsection