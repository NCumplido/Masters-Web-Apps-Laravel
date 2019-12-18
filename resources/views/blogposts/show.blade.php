@extends('layouts.app')

@section('title', 'Blogpost details')

@section('content')

    <ul>

        <li>BlogPost Id: {{ $blogPost->id }} </li>

        <li>User id: {{ $blogPost->user_id }} </li>

        <li>Creator: {{ $blogPost->user->name }} </li>

        <li>Topic: {{ $blogPost->topic }} </li>

        <li>Content: {{ $blogPost->content }} </li>

        <li>Votes: {{ $blogPost->votes }} </li>

    </ul>

    <a href="{{route('blogposts.update', ['id' => $blogPost->id]) }}"> 
        Edit 
    </a>

    <form method="POST" action="{{route('blogposts.destroy', ['id' => $blogPost->id]) }}">

        @csrf

        @method('DELETE')

        <button type="submit">Delete</button>
    </form>

    <form method="POST" action="{{ route('comments.store') }}">

        @csrf

        <p>Comment: <input type="text" name="content"></p>

        <input type="submit" value="Submit">
    
    </form>
    
    <div> Comments </div>

    <ul>
    @foreach ($comments as $comment)
    @if ($comment->blogpost_id === $blogPost->id)

        <li>Comment id:
            <a href="{{route('users.show', ['id' => $comment->id]) }}"> 
                Name: {{$comment->creator}} 
            </a>
        </li>

        <li> Content: {{$comment->content}} </li>

        <li> Time created: {{$comment->post_created_at ?? 'Unknown' }} </li> 
    @endif
    @endforeach
    </ul>

    <a href="{{ route('home') }}">Home</a>

@endsection