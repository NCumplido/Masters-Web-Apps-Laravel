@extends('layouts.app')

@section('title', 'Blogpost details')

@section('content')

    <ul>
        <li>Name: {{ $blogPosts->creator }} </li>

        <li>Blogpost: {{ $blogPosts->topic }} </li>

        <li>Content: {{ $blogPosts->content }} </li>

        <li>Votes: {{ $blogPosts->votes }} </li>

    </ul>

@endsection