<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <a href="/">Welcome</a> | <a href="/about">About</a> | <a href="/contact">Contact</a> | <a href="/category">Category</a>
    สวัสดี, คุณ @if(auth()->check())  {{auth()->user()->name}} @else บุคคลทั่วไป @endif <a href="/auth/logout">ออกจากระบบ</a>
    @yield("content")
    <hr>
    &copy; 2021 Natthanan Prasertsri
</body>
</html>
