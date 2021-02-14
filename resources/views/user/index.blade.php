@extends('layout.master')
@section('content')

<h1>User</h1>
<a href="/user/create"> + add User</a>
<table style="background-color: rgb(229, 190, 190); " >
    <thead  >
        <tr >
            <td>ลำดับ</td>
            <td>name</td>
            <td>username</td>
            <td>E-mail</td>
            <td>password</td>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->password}}</td>
            <td><a href="/user/edit/{{$item->id}}">แก้ไข</a> <a href="/user/delete/{{$item->id}}">ลบ</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection;
