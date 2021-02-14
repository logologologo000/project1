<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/category">Category</a> | <a href="/user">User</a> | <a href="/post">Post</a> <br><br>
    สวัสดี , @if (auth()->check()) {{auth()->user()->name}} <a href="/auth/logout">ออกจากระบบ</a> @else สวัสดีบุคคลทั่วไป @endif
    @yield("content")


    <hr>
    <center>&copy; 2021 pannawit</center>
</body>
</html>
