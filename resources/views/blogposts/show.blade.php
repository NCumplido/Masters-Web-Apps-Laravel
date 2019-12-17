@extends('layouts.app')

@section('title', 'Blogpost details')

@section('content')

    <ul>

        <li>BlogPost Id: {{ $blogPost->id }} </li>

        <li>User id: {{ $blogPost->user_id }} </li>

        <li>Creator: {{ $blogPost->user->name }} </li>

        <li>Blogpost: {{ $blogPost->topic }} </li>

        <li>Content: {{ $blogPost->content }} </li>

        <li>Votes: {{ $blogPost->votes }} </li>

    </ul>

    <form method="POST" action="{{ route('comments.store') }}">

        @csrf

        <p>Comment: <input type="text" name="content"></p>

        <input type="submit" value="Submit">
    
    </form>

    {{--@foreach ($comments as $comment)
    <ul>
        <li>
            User:
            <a href="{{route('users.show', ['id' => $comment->user_id]) }}"> 
                Name: {{$comment->creator}} 
            </a>
        </li>

        <li> Content: {{$comment->content}} </li>

        <li> Time created: {{$comment->post_created_at ?? 'Unknown' }} </li>
    });
        
    </ul>
    @endforeach--}}

@endsection