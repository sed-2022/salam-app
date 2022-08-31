@extends('layouts._dashboard') 


@section('content')



<main id="main">
<div class="buyer-control" style="background-color: white;">

@include('layouts._admin_dashboard_panel')


  <section class="home-section">

    <ul class="breadcrumb" id="breadcrumb-title">
      <li><a href="/summary">لوحة التحكم</a></li>
      <li><a href="#" style="color:#3e4a5e;">إعدادات الصفحات</a></li>
    </ul>

    <div id="settings" class="tabcontent">
      <h5>إعدادات الصفحات</h5>

      <div class="row" style="display: flex;">


        <div class="col-lg-4 col-sm-6 col-12">

          <a href="/home-page-settings">
            <div class="info-box2 shadow-sm more-shadow">
              <span class="info-box-icon bg-item-set"><i class="bi bi-shop"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">الصفحة الرئيسية</span>
                <span class="info-box-text">تعديل محتوى الصفحة الرئيسية</span>

              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

        </div>



        <div class="col-md-4 col-sm-6 col-12">
          <a href="/involved-companies-settings">
            <div class="info-box2 shadow-sm more-shadow">
              <span class="info-box-icon bg-item-set"><i class="bi bi-building"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">
                  الشركات المنفذه 
                </span>
                <span class="info-box-text">تعديل الشعارات المضافة</span>

              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
        </div>


        <div class="col-md-4 col-sm-6 col-12">
          <a href="/parteners">
            <div class="info-box2 shadow-sm more-shadow">
              <span class="info-box-icon bg-item-set"><i class="bi bi-building"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">شركاء النجاح</span>
                <span class="info-box-text">تعديل الشعارات المضافة</span>

              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
        </div>


        <div class="col-lg-4 col-sm-6 col-12">


          <a href="/project-scheme-settings">
            <div class="info-box2 shadow-sm more-shadow">
              <span class="info-box-icon bg-item-set"><i class="bi bi-grid-1x2"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">مخطط المشروع</span>
                <span class="info-box-text">تعديل الصور في صفحة مخطط المشروع</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

        </div>

        <div class="col-lg-4 col-sm-6 col-12">

          <a href="/funding-companies-settings">
            <div class="info-box2 shadow-sm more-shadow">
              <span class="info-box-icon bg-item-set"><i class="bi bi-building"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">صفحة الجهات التمويلية</span>
                <span class="info-box-text">تعديل  محتوى الصفحة التمويلية</span>

              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

        </div>


        <div class="col-lg-4 col-sm-6 col-12">

          <a href="/edit-image-gallery">
            <div class="info-box2 shadow-sm more-shadow">
              <span class="info-box-icon bg-item-set"><i class="bi bi-images"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">صفحة معرض الصور</span>
                <span class="info-box-text">إضافة صور</span>

              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

        </div>

        <div class="col-md-4 col-sm-6 col-12" hidden>

          <a href="/subscription-manager">
            <div class="info-box2 shadow-sm more-shadow">
              <span class="info-box-icon bg-item-set"><i class="bi bi-patch-check"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">{{ __('home.subscription_management_title') }}</span>
                <span class="info-box-text">{{ __('home.edit_subscription_management_settings_title') }}</span>

              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

        </div>


        <div class="col-md-4 col-sm-6 col-12" hidden>


          <a href="/notifications-settings">
            <div class="info-box2 shadow-sm more-shadow">
              <span class="info-box-icon bg-item-set"><i class="bi bi-bell-slash"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">{{ __('home.notifications_title') }}</span>
                <span class="info-box-text">{{ __('home.edit_notification_settings_title') }}</span>

              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

        </div>


        <div class="col-md-4 col-sm-6 col-12" hidden>


          <a href="/electronic-billing">
            <div class="info-box2 shadow-sm more-shadow">
              <span class="info-box-icon bg-item-set"><i class="bi bi-receipt"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">{{ __('home.electronic_billing_title') }}</span>
                <span class="info-box-text">{{ __('home.edit_tax_settings_title') }}</span>

              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

        </div>


      </div>

    </div>


  </section>
</div>


</main><!-- End #main -->




@endsection
