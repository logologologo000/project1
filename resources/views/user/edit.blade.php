@extends('layout.master')
@section('content')

    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/user/update/{{$user->id}}" method="post">
        @csrf
        Name : <input type="text" name="name" value="{{$user->name}}" required><br>
        Username :<input type="text" name="username" value="{{$user->username}}" required><br>
        Email : <input type="text" name="email" value="{{$user->email}}" required><br>
        Password : <input type="text" name="password" value="{{$user->password}}" required><br>
        <button type="submit">บันทึก</button>

    </form>

@endsection;
