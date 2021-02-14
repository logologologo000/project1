@extends('layout.master')
@section('content')

    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/post/store" method="post">
        @csrf
        Title :  <input type="text" name="title" required><br>
        thumbnail : <input type="text" name="thumbnail" required ><br>
        user_id : <input type="text" name="user_id" required ><br>
        category_id : <input type="text" name="category_id" required><br>
        detail : <input type="text" name="detail" required><br>
        <button type="submit">บันทึก</button>

    </form>

@endsection;
