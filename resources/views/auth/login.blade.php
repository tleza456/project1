@extends('layout.master')
@section('content')

<h1>กรุณากรอกข้อมูลเพื่อเข้าสู่ระบบ</h1>
    <form action="/auth/doLogin" method="post">
        @if ($errors->any())
        @foreach ($errors->all() as $item)
            {{$item}}
        @endforeach
        @endif
        @csrf
        email:<input type="email" name="email" required><br>
        password:<input type="password" name="password" required><br>
        <button type="submit">เข้าสู่ระบบ</button>
    </form>
@endsection
