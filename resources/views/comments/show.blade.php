@extends('layouts.app')

@section('title', 'Comment details')

@section('content')

    <ul>
        <li>Name: {{ $comment->creator }} </li>

        <li>Content: {{ $comment->content }} </li>

        <li>Blogpost: {{ $comment->blogPost_id }} </li>


    </ul>

@endsection