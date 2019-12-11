@extends('layouts.app')

@section('title', 'Blogposts')

@section('content')
    <p>BlogPosts from the index view </p>
    
    <ul>

        @foreach ($blogposts as $blogpost)

        <div style="text-align: left;"><strong>{{$blogpost->creator}}</strong>&nbsp; &nbsp;
                            &nbsp;&nbsp;<strong>{{$blogpost->email}}</strong></div>

<ul>
<li>{{$blogpost->topic}}</li>
</ul>
<div>&nbsp;</div>
<ul>
<li>{{$blogpost->content}}</li>
<li>Time created: {{$blogpost->post_created_at ?? 'Unknown' }}</li>
<li>{{$blogpost->votes}}</li>
</ul>

<p>&nbsp;</p>

        @endforeach
    
    </ul>

    
@endsection

#Blank divs to create space and improve readability on web page.
#Lecture 10 @23:18 for photos routes, then look for more routes for more features.