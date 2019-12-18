@extends('layouts.app')

@section('title', 'comments')

@section('content')


    <p>Comments from the index view </p>
    
    

        @foreach ($comments as $comment)

        <div style="text-align: left;">

        <ul>   
            <li> <a href="{{route('comments.show', ['id' => $comment->id]) }}"> {{$comment->id}} </li>
        
            <li> Creator: {{ $comment->creator }} </li> 

            <li> Email: {{$comment->email}} </li>
        
            <li> Content: {{$comment->content}} </li>

        </ul>

        </div>

        @endforeach

    
@endsection

{{-- Lecture 10 @23:18 for photos routes, then look for more routes for more features. --}}
