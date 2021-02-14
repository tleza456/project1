@extends('layout.master')
@section('content')

<h1>กรุณากรอกข้อมูล</h1>
    <form action="/user/update/{{$user->id}}" method="post">
        @csrf
        name :<input type="text" name="name" value="{{$user->name}}" required><br>
        username :<input type="text" name="username" value="{{$user->username}}" required><br>
        email :<input type="email" name="email" value="{{$user->email}}" required><br>
        password :<input type="password" name="password" value="{{$user->password}}" required>
        <button type="submit">บันทึก</button>
    </form>
@endsection
