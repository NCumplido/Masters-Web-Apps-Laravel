@extends('layouts.app')

@section('title', 'Blogpost details')

@section('content')

<form method="POST" action="{{ route('blogposts.store') }}">

    @csrf

    <li>BlogPost Id: {{ $blogPost->id }} </li>

    <li>User id: {{ $blogPost->user_id }} </li>

    <li>Creator: {{ $blogPost->user->name }} </li>

    <p>Title: <input type="text" name="title" value="{{ old('title') }}"></p>

    <p>Content: <input type="text" name="content" value="{{ old('content') }}"></p>

    <p>Topic: <input type="text" name="topic" value="{{ old('topic') }}"></p>

    <li>Votes: {{ $blogPost->votes }} </li>

    <input type="submit" value="Submit">

    <a href="{{ route('home') }}">Cancel</a>

</form>

@endsection