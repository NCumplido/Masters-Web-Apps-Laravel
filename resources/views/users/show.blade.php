@extends('layouts.app')

@section('title', 'User details')

@section('content')

    <ul>
        <li>Name: {{ $user->name }} </li>

        <li>Email: {{ $user->email }} </li>

        <li>Role: {{ $user->role ?? 'Unknown'  }} </li>

    </ul>

@endsection