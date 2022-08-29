<!DOCTYPE html>

<html dir="rtl">

<head>
    <meta charset="utf-8">
    <title>Test title</title>

    <style>

        h3{
            margin:0px;
        margin-top: 3%;
        }
        p {
            margin:0px;
        margin-top: 0.2%;
        }
    </style>
</head>

<body style="text-align: right; font-size: 16px;">
<h2>مرحبًا</h2> <br>

لقد تم استقبال رسال من {{ $name }}

<h3 style="margin-block-start: 0;margin-block-end: 0;">الاسم</h3>
<p>
{{ $name }}
</p>


<h3 style="margin-block-start: 0;margin-block-end: 0;">البريد الالكتروني</h3>
<p>
 {{ $email }}
</p>

<h3 style="margin-block-start: 0;margin-block-end: 0;">رقم الجوال</h3>
<p>
 {{ $phone }}
</p>

<h3 style="margin-block-start: 0;margin-block-end: 0;">محتوى الرسالة</h3>
<p>
{{ $user_query }}
</p>

</body>

</html>
