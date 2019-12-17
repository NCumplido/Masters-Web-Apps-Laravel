@extends('layouts.app')

@section('title', 'Blogposts')

@section('content')

    <p>Blogposts from the index view </p>

    <h1> <a href="{{ route('blogposts.index') }}">Blog posts</a> </h1>    
    
    <ul>

        @foreach ($blogposts as $blogpost)

        <div style="text-align: left;">
            <strong>
                <li> <a href="{{route('blogposts.show', ['id' => $blogpost->id]) }}"> 
                    {{$blogpost->creator}}{{$blogpost->email}}
        </div>

<ul>
    <li>Blogpost id: {{$blogpost->id}}</li>
    <li>User id: {{$blogpost->user_id}}</li>
    <li>{{$blogpost->topic}}</li>
</ul>
<div>&nbsp;</div>
<ul>
<li> {{$blogpost->content}}</li>

<li>Time created: {{$blogpost->post_created_at ?? 'Unknown' }}</li>
<li>{{$blogpost->votes}}</li>
</ul>

<p>&nbsp;</p>

        @endforeach
    
    </ul>

    
@endsection

#Blank divs to create space and improve readability on web page.
#Lecture 10 @23:18 for photos routes, then look for more routes for more features.
