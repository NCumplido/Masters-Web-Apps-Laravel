@extends('layouts.app')

@section('title', 'User details')

@section('content')

    <ul>
        <li>Name: {{ $user->name }} </li>

        <li>Id: {{ $user->id }} </li>

        <li>Email: {{ $user->email }} </li>

        <li>Role: {{ $user->role }} </li> {{--This was used if the attribute was unknown:  ?? 'Unknown' --}}

    </ul>

@endsection