@extends('layouts.app')

@section('title', 'Blogposts')

@section('content')
    <p>BlogPosts from the index view </p>
    
    <ul>

        @foreach ($blogposts as $blogpost)

            /n

            <div> {{$blogpost->creator}} </div> 
            
            <li>{{$blogpost->content}}</li>

        @endforeach
    
    </ul>

    
@endsection