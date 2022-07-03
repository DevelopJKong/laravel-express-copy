@extends('layouts.app')

@section('title','Login')

@section('content')
    <form action="/login" method="POST">
        @csrf
        <input type="text" placeholder="Email" name="email"/>
        <input type="password" placeholder="Password" name="password"/>
        <button>Login</button>
    </form>
@endsection
