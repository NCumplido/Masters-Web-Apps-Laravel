@extends('layouts.app')

@section('title', 'Create user')

@section('content')

    <form method="POST" action="{{ route('users.store') }}">

        @csrf
        <p>Name: <input type="text" name="name" ></p>
        <p>Email: <input type="email" name="email" ></p>
        <p>Password: <input type="password" name="password" ></p>
        <p>Role: <input type="text" name="role" ></p>

        <a href="{{ route('users.index') }}">Cancel</a>
    
    </form>

@endsection
              