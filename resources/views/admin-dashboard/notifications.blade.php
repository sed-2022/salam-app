@extends('layouts._dashboard')



  
@push('styles')


<style>
.bg-error{
  background-color:#c30000;
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
        <li><a href="#" style="color:#3e4a5e;">الإشعارات</a></li>
    </ul>



    <div id="notification-tab" class="tabcontent">
      <p style="font-size: 18px;">مرحبًا {{$user->name}} !</p>


      <section class="notification-section translate">
        <div style="display: flex;">
          <h4 style="margin:5px; margin-bottom:15px;">الإشعارات الجديدة</h4><div class="numberCircle">{{$notifications->count()}}</div>
        </div>
        <div class="vcv-container">
          
          @forelse($notifications as $notification)

          <div class="vce-simple-message-box vce {{ $notification->data['box-style'] }}">
              <div class="vce-simple-message-box-inner">
                <span class="vce-simple-message-box-icon material-icons bi {{ $notification->data['icon'] }}"></span>
                <span class="vce-simple-message-box-text">
                  <p>{{ $notification->data['title'] }}</p><a href="{{ $notification->data['actionURL'] }}">{{ $notification->data['actionText'] }}</a>  
                </span>
              </div>
            </div>

            <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                  
            </a>
          @empty
          لا يوجد إشعارات جديدة
          @endforelse

          
        </div>

      </section>


      <section class="notification-section">
        <div style="display: flex;">
          <h4 style="margin:5px; margin-bottom:15px;">الإشعارات السابقة</h4>
        </div>
        <div class="vcv-container">
          
          @forelse($read_notifications as $notification)

          <div class="vce-simple-message-box vce {{ $notification->data['box-style'] }}">
              <div class="vce-simple-message-box-inner">
                <span class="vce-simple-message-box-icon material-icons bi {{ $notification->data['icon'] }}"></span>
                <span class="vce-simple-message-box-text">
                  <p>{{ $notification->data['title'] }}</p><a href="{{ $notification->data['actionURL'] }}">{{ $notification->data['actionText'] }}</a>  
                </span>
              </div>

            </div>



          @empty
          لا توجد إشعارات سابقة
          @endforelse


        
        </div>

      </section>

    </div>

  </section>   
</div>



<script>
    function sendMarkRequest(id = null) {
        return $.ajax("/mark-as-read", {
            method: 'POST',
            data: {
              "_token": "{{ csrf_token() }}",
              "id": id
            }
        });
    }
    $(function() {
        let notificationList = $('.mark-as-read');
        
        for(var i=0; i<notificationList.length; i++ ){
          

          let request = sendMarkRequest($(notificationList[i]).data('id'));
          request.done(() => {
                $(notificationList[i]).parents('div.alert').remove();
            });
        }
        $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                $('div.alert').remove();
            })
        });
    });
    </script>
    
</main><!-- End #main -->



@endsection



