@extends('layouts.app')

@section('title','Signup')

@section('content')
    <form action="register" method="POST">
        @csrf
        <input type="text" placeholder="Username" name="username"/>
        @error('username')
            <p style="color:red">닉네임이 잘못됐습니다</p>
        @enderror
        <input type="text" placeholder="Name" name="name"/>
        @error('name')
            <p style="color:red">이름이 잘못됐습니다</p>
        @enderror
        <input type="password" placeholder="Password" name="password"/>
        @error('password')
            <p style="color:red">패스워드가 잘못됐습니다</p>
        @enderror
        <input type="password" placeholder="Confirmation Password" name="password_confirmation"/>
        @error('password_confirmation')
            <p style="color:red">패스워드가 일치하지 않습니다</p>
        @enderror
        <input type="email" placeholder="Email" name="email"/>
        @error('email')
            <p style="color:red">이메일이 잘못됐습니다</p>
        @enderror
        <input type="text" placeholder="Region" name="region"/>
        @error('email')
            <p style="color:red">지역이 잘못됐습니다</p>
        @enderror
        <input type="hidden" name="avatar" value="cafe small house"/>
        <button>Signup</button>
    </form>
@endsection
