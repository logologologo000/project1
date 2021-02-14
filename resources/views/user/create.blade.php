@extends('layout.master')
@section('content')

    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/user/store" method="post">
        @csrf
        Username :  <input type="text" name="username" required><br>
        Name : <input type="text" name="name" required ><br>
        Email : <input type="text" name="email" required ><br>
        Password : <input type="text" name="password" required><br>
        <button type="submit">บันทึก</button>

    </form>

@endsection;
