@extends('layout.master')
@section('content')

    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/auth/dologin" method="post">
        @if($errors->any())
            @foreach($errors->all() as $error)

            {{$error}}
            @endforeach
        @endif
        @csrf
        User name : <input type="text"  name="username" required><br>
        Password : <input type="password" name="password" required><br>
        <button type="submit">บันทึก</button>

    </form>

@endsection;
