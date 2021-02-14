@extends('layout.master')
@section('content')

<h1>Post</h1>
<a href="/post/create"> + add Post</a>
<table style="background-color: rgb(229, 190, 190); " >
    <thead  >
        <tr >
            <td>ID</td>
            <td>title</td>
            <td>thumbnail</td>
            <td>user_id</td>
            <td>category_id</td>
            <td>detail</td>
        </tr>
    </thead>

    <tbody>
        @foreach($posts as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->thumbnail}}</td>
            <td>{{$item->user_id}}</td>
            <td>{{$item->category_id}}</td>
            <td>{{$item->detail}}</td>
            <td><a href="/post/edit/{{$item->id}}">แก้ไข</a> <a href="/post/delete/{{$item->id}}">ลบ</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection;
