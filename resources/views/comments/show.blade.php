@extends('layouts.app')

@section('title', 'Comment details')

@section('content')

    //<li>Blogpost: {{ $comment->blogpost_id->content }} </li>

    /*$comment = Comment::with('item')->where('date', $date)->get(); return view('sale.detail', compact('sales'));
    Eager loading */

    <ul>

        <li>Comment Id: {{$comment->id}}</li>

        <li>Poster: {{$comment->creator}} </li> {{--Returning bad string--}}

        <li>Content: {{ $comment->content }} </li>        

    </ul>

    <a href="{{ route('home') }}">Cancel</a>

@endsection