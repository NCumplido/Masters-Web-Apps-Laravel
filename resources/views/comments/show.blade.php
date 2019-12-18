@extends('layouts.app')

@section('title', 'Comment details')

@section('content')

    {{--
    <li>Blogpost: {{ $comment->blogpost_id->content }} </li>
    
    Look into Eager loading 
    --}}

    <ul>

        <li>Comment Id: {{$comment->id}}</li>

        <li>BlogPost Id: {{$comment->blogpost_id}}</li>

        <li>User Id: {{$comment->user_id}}</li>

        <li>User: {{$comment->creator}} </li> {{--Returning bad string--}}

        <li>Content: {{ $comment->content }} </li>        

    </ul>

    <a href="{{route('blogposts.show', ['id' => $comment->blogpost_id]) }}">Cancel</a>

@endsection