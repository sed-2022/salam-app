@push('styles')


<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  #map {
    width: fit-content;
    height: 350px;
    background-color: grey;
  }

  .custom-btn3 {
    color: rgb(88, 88, 88);
    background-color: #d8d8d8;
    background: linear-gradient(-45deg, #fdfdfd, #d8d8d8);
    border-color: #d8d8d8;
    font-weight: 600;
  }

  .custom-btn3:hover {
    color: rgb(88, 88, 88);
  }

  .custom-btn4 {
    color: #fff;
    background-color: #ffa600;
    background: linear-gradient(135deg, #ffa600 60%, #ffdb99, );
    border-color: #ffa600;
    font-weight: 600;
  }

  .custom-btn4:hover {
    color: #fff;
  }




  .on-going-sub {
    color: #3a9046;
    font-weight: 800;
  }

  .stopped-sub {
    color: grey;
    font-weight: 800;
  }

  /*

    .custom-btn3:hover {
      color: #fff;
      background-color: rgb(255, 187, 61);
    }

*/


  .totals-summary {
    display: grid;
  }


  .totals-summary p {
    font-weight: 800;
  }

  .totals-summary a {
    float: right;
    color: inherit;
    font-weight: 600;
    font-size: 14px;
  }

  .totals-summary a:hover {
    color: green;
  }

  .btn-success {
    background-color: #3a9046;
    border: 1px solid #3a9046;
  }

  .btn-success {
    background-color: #4fb45c;
  }


  .dropbtn-seller {
    background-color: #4CAF50;
    color: white;
    padding: 9px;
    font-size: 14px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    line-height: 1;
  }

  .dropdown-seller {
    position: relative;
    display: inline-block;
    width: fit-content;
  }

  .dropdown-content-seller {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 90px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    width: fit-content;
  }

  .dropdown-content-seller a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    width: fit-content;
  }

  .dropdown-content-seller a:hover {
    background-color: #f1f1f1
  }

  .dropdown-seller:hover .dropdown-content-seller {
    display: block;
  }

  .dropdown-seller:hover .dropbtn-seller {
    background-color: #3e8e41;
  }

  select {
    width: 89%;
    padding: 6px 10px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .top-links a {
    font-weight: 700;
    margin-inline-end: 10px;
  }


  .top-links span {
    color: gray;
  }

  .table-ord-details td,
  th {
    background: white;
  }


  .seller-orders table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;

  }

  .seller-orders table caption {
    font-size: 1.5em;
    margin: .5em 0 .75em;
  }

  .seller-orders table tr {
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    padding: .35em;
  }

  .seller-orders table th,
  .seller-orders table td {
    padding: .625em;
    text-align: center;
  }

  .seller-orders table th {
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
    background-color: #0da9ef;
    color: white;
    font-weight: 700;
  }

  #find-service table th {
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
    background-color: antiquewhite;
    font-weight: 700;
    color: rgb(49, 49, 49);
  }

  #find-service table td {
    border: 1px solid rgb(230, 230, 230);
    word-wrap: break-word;
  }


  .seller-orders a:hover {
    color: #8BF;
  }

  @media screen and (max-width: 600px) {

    #uploadFile,
    #uploadFile4 {
      width: 62% !important;
    }

    .seller-orders table {
      border: 0;
    }

    .seller-orders table caption {
      font-size: 1.3em;
    }

    .seller-orders table thead {
      border: none;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
      color: #8BF;
    }

    .seller-orders table tr {
      border-bottom: 3px solid #ddd;
      display: block;
      margin-bottom: .625em;
    }

    .seller-orders table td {
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: .8em;
      text-align: right;
    }

    html[dir="rtl"] .seller-orders table td {
      text-align: left;
    }

    .seller-orders table td::before {
      /*
    * aria-label has no advantage, it won't be read inside a #myorders table
    content: attr(aria-label);
    */
      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }

    html[dir="rtl"] .seller-orders table td::before {
      float: right;
    }

    .seller-orders table td:last-child {
      border-bottom: 0;
    }
  }

  #selected-main-categ li {
    margin-inline-end: 20px;
  }

  #uploadFile,
  #uploadFile4 {
    width: 74%;
  }

  .inputfile-person {
    background-color: rgb(255, 255, 255);
    border: 1px solid rgb(255, 255, 255);
    outline: none;
    padding: 5px;
    color: rgb(30, 30, 59);
    cursor: pointer;
  }

  .inputfile-person:hover {
    background-color: rgb(235, 235, 235);
    color: rgb(30, 30, 59);
    border: 1px solid rgb(30, 30, 59);
  }

  .inputfile-person i {
    margin-inline-end: 4px;
  }




  .file-person-img-upload {
    position: relative;
    overflow: hidden;
    font-size: 87%;
    border-radius: 0px;
    cursor: pointer;
  }

  .file-person-img-upload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 14px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=1);
  }

  .payment-img-conatiner {
    width: 40px;
    height: 30px;
    object-fit: cover;
    margin-inline-start: 10px;
  }

  .payment-img-conatiner img {
    width: 100%;
    height: auto;

  }

  .prod-page-link {
    -webkit-margin-end: 0px;
  }

  .update-prod-page-link {
    -webkit-margin-start: 0px;
  }

  .box-wrapper {
    text-align: center;
    margin: 10px;
    border-radius: 5px;
    width: 80%;
    padding: 5px;
    padding-top: 10px;
    padding-bottom: 10px;
    border: 1px solid rgb(218, 218, 218);
  }

  .box-wrapper input {
    text-align: center;
  }

  #all-service-orders {
    overflow-x: scroll;
  }

  .personal-page a {
    color: red;
    text-decoration: underline;
    font-weight: 700;
    font-size: 12px;
  }

  .btn-order-status {
    background-color: #0da9ef;
    border: 1px solid #0da9ef;
    color: white;
    font-size: 12px;
  }

  .btn-order-status:hover {
    color: rgb(0, 1, 49);
  }

  .dropdown-item.active,
  .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #28a745;
    /*#0da9ef;*/
  }


  .customer-product-section .collapsible {
    background-color: #e2e3e5;
    color: rgb(54, 54, 54);
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: start;
    outline: none;
    font-size: 15px;
    font-weight: 700;
  }

  .customer-product-section .active,
  .customer-product-section .collapsible:hover {
    background-color: #e2e3e5;
  }


  .customer-product-section .collapsible i {
    color: rgb(54, 54, 54);
    margin-inline-end: 5px;
  }


  html[dir="ltr"] .customer-product-section .collapsible:after {
    float: right;
  }



  .customer-product-section .content {
    width: 100%;
    /*padding: 0 18px;*/
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
  }


  @media screen and (max-width: 747px) {
    .customer-product-section .collapsible {

      width: 100%;

    }
  }


  .sidebar .nav-links li a .links_name {
    color: #2b3d2d;
    font-size: 14px;

  }

  .sidebar .nav-links li i {
    color: #2b3d2d;
  }

  #seller-sidebar a:hover {
    background: unset;
    color: #2b3d2d;
  }

  #seller-sidebar a.active {
    background-color: #f0d491;
    color: #3a9046 !important;
  }


  .sidebar .nav-links a.active span {
    color: white !important;
  }

  .sidebar .nav-links a.active i {
    color: white !important;
  }


  .sidebar .nav-links li a.active:after {
    border-color: transparent #f9f9f9 transparent transparent;
  }


  .sidebar .logo-details .logo_name {
    color: #2b3d2d;

  }

  .sidebar .logo-details i {
    color: #2b3d2d;
  }


  .all-orders-table .form-check .form-check-input:checked {
    background-color: #3a9046;
  }



  .mr-2 {
    margin-right: 2px;
  }


  .ml-2 {
    margin-left: 2px;
  }

  .tb-data {
    text-align: start;
  }
</style>


@endpush

<?php $notifications = auth()->user()->unreadNotifications; ?>

<div id="seller-sidebar" class="sidebar">
  <div class="logo-details">
    <!--<i class='bi bi-house-door-fill'></i>-->
    <i class='bi bi-list sidebarBtn'></i>
    <span class="logo_name">لوحة التحكم</span>
  </div>
  <ul class="nav-links">

    <li>
      <a href="/" class="tablinks">
        <i class='bi bi-house-door'></i>
        <span class="links_name">الرئيسية</span>

      </a>
    </li>


    <li>
      <a href="/all-notifications-list" class="tablinks {{ request()->is('all-notifications-list') ? 'active' : '' }}">
        <i class='bi bi-bell'></i>
        <span class="links_name">الإشعارات</span>
        <div style="-webkit-margin-start: 10px;" class="numberCircle">{{$notifications->count()}}</div>
      </a>
    </li>

    <li hidden>
      <a href="/all-housing-settings/A" class="tablinks {{ request()->is('all-housing-settings/A') ? 'active' : '' }}">
        <i class='bi bi-house-fill'></i>
        <span class="links_name">الفلل المحجوزة A</span>
      </a>
    </li>
    <li hidden>
      <a href="/all-housing-settings/B" class="tablinks {{ request()->is('all-housing-settings/B') ? 'active' : '' }}">
        <i class='bi bi-house-fill'></i>
        <span class="links_name">الفلل المحجوزة B</span>
      </a>
    </li>
    <li hidden>
      <a href="/all-housing-settings/C" class="tablinks {{ request()->is('all-housing-settings/C') ? 'active' : '' }}">
        <i class='bi bi-house-fill'></i>
        <span class="links_name">الفلل المحجوزة C</span>
      </a>
    </li>


    <li>
      <a href="/all-visitors-choises" class="tablinks {{ request()->is('all-visitors-choises') ? 'active' : '' }}">
        <i class="ri-user-star-line"></i>
        <span class="links_name">طلبات الحجز الواردة</span>
      </a>
    </li>

    <li>
      <a href="/all-appointments-list" class="tablinks {{ request()->is('all-appointments-list') ? 'active' : '' }}">
        <i class="bi bi-calendar-check"></i>
        <span class="links_name">طلبات الزيارة الواردة</span>
      </a>
    </li>



    <li>
      <a href="/all-contactus-messages" class="tablinks {{ request()->is('all-contactus-messages') ? 'active' : '' }}">
        <i class="bi bi-chat-left-dots-fill"></i>
        <span class="links_name"> نماذج التواصل معنا</span>
      </a>
    </li>


    <li>
      <a href="/houses-A-detilas" class="tablinks {{ request()->is('houses-A-detilas') ? 'active' : '' }}">
        <i class="bi bi-table"></i>
        <span class="links_name">تفاصيل شقق النموذج A</span>
      </a>
    </li>


    <li>
      <a href="/houses-B-detilas" class="tablinks {{ request()->is('houses-B-detilas') ? 'active' : '' }}">
        <i class="bi bi-table"></i>
        <span class="links_name">تفاصيل شقق النموذج B</span>
      </a>
    </li>


    <li>
      <a href="/houses-C-detilas" class="tablinks {{ request()->is('houses-C-detilas') ? 'active' : '' }}">
        <i class="bi bi-table"></i>
        <span class="links_name">تفاصيل شقق النموذج C</span>
      </a>
    </li>


    <li>
      <a href="/periodic-reports-settings" class="tablinks {{ request()->is('periodic-reports-settings') ? 'active' : '' }}">
        <i class='bi bi-newspaper'></i>
        <span class="links_name">إعدادات التقارير الدورية</span>
      </a>
    </li>


    <li>
      <a href="/settings" class="tablinks" onclick="showSubSettings();" data-target="#submenu-2">
        <i class='bi bi-gear'></i>
        <span class="links_name">إعدادات الصفحات <i class="bi bi-chevron-down arrow-1 {{ request()->is('settings') ? 'special' : '' }}"></i></span>
      </a>
    </li>



    <div>


      <li id="submenu-3" class="{{ request()->is('settings') || request()->is('involved-companies-settings') || request()->is('involved-companies-settings') || request()->is('home-page-settings') || request()->is('project-scheme-settings') || request()->is('funding-companies-settings') || request()->is('subscription-manager') || request()->is('parteners') || request()->is('notifications-settings')? '' : 'dashboard-sub-menu' }}">
        <a href="/home-page-settings" class="tablinks {{ request()->is('home-page-settings') ? 'active' : '' }} inner-menu">
          <i style="font-size: 14px;" class='bi bi-shop'></i>
          <span style="font-size: 13px;" class="links_name">إعدادات الصفحة الرئيسية</span>
        </a>
      </li>

      <li id="submenu-4" class="{{ request()->is('settings') || request()->is('involved-companies-settings') || request()->is('involved-companies-settings') || request()->is('home-page-settings') || request()->is('project-scheme-settings') || request()->is('funding-companies-settings') || request()->is('subscription-manager') || request()->is('parteners') || request()->is('notifications-settings')? '' : 'dashboard-sub-menu' }}">
        <a href="/project-scheme-settings" class="tablinks {{ request()->is('project-scheme-settings') ? 'active' : '' }} inner-menu">
          <i class='bi bi-grid-1x2'></i>
          <span class="links_name">إعدادات مخطط المشروع</span>
        </a>
      </li>


      <li id="submenu-1" class="{{ request()->is('settings') || request()->is('involved-companies-settings') || request()->is('involved-companies-settings') || request()->is('home-page-settings') || request()->is('project-scheme-settings') || request()->is('funding-companies-settings') || request()->is('subscription-manager') || request()->is('parteners') || request()->is('notifications-settings')? '' : 'dashboard-sub-menu' }}">
        <a href="/funding-companies-settings" class="tablinks {{ request()->is('funding-companies-settings') ? 'active' : '' }} inner-menu">
          <i class='bi bi-building'></i>
          <span class="links_name">إعدادات الجهات التمويلية</span>
        </a>
      </li>


      <li id="submenu-5" hidden class="{{ request()->is('settings') || request()->is('involved-companies-settings') || request()->is('involved-companies-settings') || request()->is('home-page-settings') || request()->is('project-scheme-settings') || request()->is('funding-companies-settings') || request()->is('subscription-manager') || request()->is('parteners') || request()->is('notifications-settings')? '' : 'dashboard-sub-menu' }}">
        <a href="/subscription-manager" class="tablinks  {{ request()->is('subscription-manager') ? 'active' : '' }}  inner-menu">
          <i class='bi bi-patch-check'></i>
          <span class="links_name">{{ __('home.subscription_management_title') }}</span>
        </a>
      </li>


      <li id="submenu-5" class="{{ request()->is('settings') || request()->is('involved-companies-settings') || request()->is('involved-companies-settings') || request()->is('home-page-settings') || request()->is('project-scheme-settings') || request()->is('funding-companies-settings') || request()->is('subscription-manager') || request()->is('parteners') || request()->is('involved-companies-settings')? '' : 'dashboard-sub-menu' }}">
        <a href="/involved-companies-settings" class="tablinks  {{ request()->is('involved-companies-settings') ? 'active' : '' }}  inner-menu">
          <i class='bi bi-building'></i>
          <span class="links_name"> الشركات المنفذة</span>
        </a>
      </li>


      <li id="submenu-5" class="{{ request()->is('settings') || request()->is('involved-companies-settings') || request()->is('involved-companies-settings') || request()->is('home-page-settings') || request()->is('project-scheme-settings') || request()->is('funding-companies-settings') || request()->is('subscription-manager') || request()->is('parteners') || request()->is('notifications-settings')? '' : 'dashboard-sub-menu' }}">
        <a href="/parteners" class="tablinks  {{ request()->is('parteners') ? 'active' : '' }}  inner-menu">
          <i class='bi bi-building'></i>
          <span class="links_name">شركاء النجاح</span>
        </a>
      </li>




      <li id="submenu-7" hidden class="{{ request()->is('settings') || request()->is('involved-companies-settings') || request()->is('involved-companies-settings') || request()->is('home-page-settings') || request()->is('project-scheme-settings') || request()->is('funding-companies-settings') || request()->is('subscription-manager') || request()->is('parteners') || request()->is('notifications-settings')? '' : 'dashboard-sub-menu' }}">
        <a href="/notifications-settings" class="tablinks {{ request()->is('notifications-settings') ? 'active' : '' }} inner-menu">
          <i class='bi bi-bell-slash'></i>
          <span class="links_name">{{ __('home.notifications_title') }}</span>
        </a>
      </li>

    </div>


    <li>
      <a href="/admin-account" class="tablinks {{ request()->is('admin-account') ? 'active' : '' }}">
        <i class='bi bi-person-circle'></i>
        <span class="links_name">تفاصيل الحساب</span>
      </a>
    </li>



    <script>
      function showSubSettings() {

        $(".arrow-1").toggleClass('special');
        $("#submenu-1").toggle();
        $("#submenu-2").toggle();
        $("#submenu-3").toggle();
        $("#submenu-4").toggle();
        $("#submenu-5").toggle();
        $("#submenu-7").toggle();
      }

      function showSubMyorders() {

        $(".arrow-2").toggleClass('special');
        $("#submenu-13").toggle();
        $("#submenu-6").toggle();
      }

      function showSubCoupons() {

        $(".arrow-3").toggleClass('special');
        $("#submenu-10").toggle();
      }

      function showSubServices() {

        $(".arrow-4").toggleClass('special');
        $("#submenu-8").toggle();
        $("#submenu-9").toggle();
        $("#submenu-14").toggle();

      }


      function showSubProducts() {

        $(".arrow-5").toggleClass('special');
        $("#submenu-11").toggle();
        $("#submenu-12").toggle();
      }
    </script>







  </ul>
</div>



<script src="/js/dashboard.js"></script>