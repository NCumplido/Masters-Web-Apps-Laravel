@extends('layouts.app')

@section('title', 'Blogpost details')

@section('content')

    <ul>

        <li>Id: {{ $blogPost->id }} </li>

        <li>Id: {{ $blogPost->user_id }} </li>

        <li>Name: {{ $blogPost->creator }} </li>

        <li>Blogpost: {{ $blogPost->topic }} </li>

        <li>Content: {{ $blogPost->content }} </li>

        <li>Votes: {{ $blogPost->votes }} </li>

    </ul>

@endsection