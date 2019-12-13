@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <p>Users from the index view </p>

    <h1> <a href="{{ route('blogposts.index') }}">Blog posts</a> </h1>
    
    <ul>

        @foreach ($users as $user)

        <div style="text-align: left;"><strong><li> <a href="{{route('users.show', ['id' => $user->id]) }}"> Name: {{ $user->name }} </li> {{$user->name}}</strong>&nbsp; &nbsp;
                            &nbsp;&nbsp;<strong>{{$user->email}}</strong></div>

<ul>
<li>{{$user->email}}</li>
</ul>
<div>&nbsp;</div>

<p>&nbsp;</p>

        @endforeach
    
    </ul>

    
@endsection

#Blank divs to create space and improve readability on web page.
#Lecture 10 @23:18 for photos routes, then look for more routes for more features.