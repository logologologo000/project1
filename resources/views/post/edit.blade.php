@extends('layout.master')
@section('content')

    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/post/update/{{$post->id}}" method="post">
        @csrf
        Tile : <input type="text" name="title" value="{{$post->title}}" required><br>
        Thumbnail :<input type="text" name="thumbnail" value="{{$post->thumbnail}}" required><br>
        user_id : <input type="text" name="user_id" value="{{$post->user_id}}" required><br>
        category_id : <input type="text" name="category_id" value="{{$post->category_id}}" required><br>
        detail : <input type="text" name="detail" value="{{$post->detail}}" required><br>
        <button type="submit">บันทึก</button>

    </form>

@endsection;
