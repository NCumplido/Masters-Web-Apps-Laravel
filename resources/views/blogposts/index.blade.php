@extends('layouts.app')

@section('title', 'Blogposts')

@section('content')

    <p>Blogposts from the index view </p>

    <h1> <a href="{{ route('blogposts.index') }}">Blog posts</a> </h1>    

        @foreach ($blogposts as $blogpost)
        
        {{-- <li> User id: {{$blogpost->user_id}} </li> --}}
    <ul>  
        <li> 
            Blog post title: 

            <a href="{{route('blogposts.show', ['id' => $blogpost->id]) }}"> 
                {{$blogpost->title}}  
            </a>
        </li>

        <li>
            Poster:

            <a href="{{route('users.show', ['id' => $blogpost->user_id]) }}"> 
                Email: {{$blogpost->user->name}} 
            </a>
        </li>

        <li> Email: {{$blogpost->email}} </li>

        <li> Topic: {{$blogpost->topic}} </li>

        <li> Content: {{$blogpost->content}} </li>

        <li> Time created: {{$blogpost->post_created_at ?? 'Unknown' }} </li>

        <li> Votes {{$blogpost->votes}} </li>
        
    </ul>

        @endforeach
    
@endsection

#Blank divs to create space and improve readability on web page.
#Lecture 10 @23:18 for photos routes, then look for more routes for more features.
