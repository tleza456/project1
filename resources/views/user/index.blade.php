@extends('layout.master')
@section('content')

<h1>ผู้ใช้งาน</h1>
<a href="/user/create">+ เพิ่มผู้ใช้ใหม่</a>

<table>
    <thead>
        <tr>
            <td>ลำดับ</td>
            <td>ชื่อ</td>
            <td>username</td>
            <td>email</td>
            <td>สร้างเมื่อ</td>
            <td>จัดการ</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->created_at}}</td>
            <td> <a href="/user/edit/{{$item->id}}">แก้ไข</a></td><td>|</td>
            <td> <a href="/user/delete/{{$item->id}}">ลบ</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
