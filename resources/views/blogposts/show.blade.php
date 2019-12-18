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

    {{-- Edit --}}
    <a href="{{route('blogposts.update', ['id' => $blogPost->id]) }}"> 
        Edit 
    </a>

    {{-- Delete --}}

    <form method="POST" action="{{route('blogposts.destroy', ['id' => $blogPost->id]) }}">

        @csrf

        @method('DELETE')

        <button type="submit">Delete</button>
    </form>

    {{-- Post comment --}}
    <form method="POST" action="{{ route('comments.store') }}">

        @csrf

        <p>Comment: <input type="text" name="content" value="{{ old('content') }}"></p>

        <input type="submit" value="Submit">
    
    </form>
    
    <div> Comments </div>

    <ul>
    @foreach ($comments as $comment)
    @if ($comment->blogpost_id === $blogPost->id)

        <li>
            Comment id: 
            <a href="{{route('comments.show', ['id' => $comment->id]) }}"> 
                {{$comment->id}} 
            </a>
        </li>

        <li> Creator: {{$comment->user->creator}} </li>

        <li> Content: {{$comment->content}} </li>

        {{--<li> Time created: {{$comment->post_created_at ?? 'Unknown' }} </li> --}}

    @endif
    @endforeach
    </ul>

    <a href="{{ route('home') }}">Home</a>

@endsection