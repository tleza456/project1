@extends('layout.master')
@section('content')

<h1>กรุณากรอกข้อมูล</h1>
    <form action="/post/update/{{$post->id}}" method="post">
        @csrf
        name :<input type="text" name="name" value="{{$post->name}}" required><br>
        postname :<input type="text" name="postname" value="{{$post->postname}}" required><br>
        email :<input type="email" name="email" value="{{$post->email}}" required><br>
        password :<input type="password" name="password" value="{{$post->password}}" required>
        <button type="submit">บันทึก</button>
    </form>
@endsection
