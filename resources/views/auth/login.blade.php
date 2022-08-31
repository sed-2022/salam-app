@extends('layouts.app') @push('styles')


<style>
    .contact-us-menue {
        display: none;
    }
    
    #hero2 {
        width: 100%;
        height: 40vh;
        background: url("./img/login-background.jpg") top center;
        background-size: cover;
        position: relative;
        padding: 0;
        background-repeat: no-repeat;
    }
    
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
    }
    
    #login .container #login-row #login-column #login-box {
        margin-top: 10%;
        max-width: 600px;
        height: 100%;
        border: 1px solid #b1b1b1;
        background-color: #f7f7f7;
        padding: 5%;
        padding-bottom: 7%;
        border-radius: 6px;
    }
    
    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }
    
    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }


    .form-group{
        margin-top: 5%;
    }

    .submit-btn {
        margin-top: 4%;
        color:white;

    }

    .text-info{
        color: #cbb4d4 !important;
        margin-bottom: 1.5%;
    }


</style>

@endpush @section('content')

<!-- ======= Hero Section ======= -->
<section id="hero2" class="hero d-flex align-items-end">

    @include('layouts.partials.side-nav')

    <div class="container">
        <div class="row">

            <div class="col-lg-12 d-flex flex-row justify-content-start">
                <h2 style="font-size: 34px; line-height: 2; font-weight: 600;" class="gradient-text">تسجيل الدخول</h2>
            </div>

        </div>
    </div>

</section>
<!-- End Hero -->

<div id="login" class="mb-5">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h3 class="text-center text-info">الدخول</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">البريد الإلكتروني:</label><br>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">كلمة المرور:</label><br>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info" style="display: contents;"><span><input  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox"></span><span style="margin-inline-start: 1.5%;">تذكرني</span> </label><br>
                                <input type="submit" name="submit" class="btn btn-md submit-btn cool-btn-effect" value="تسجيل الدخول">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection