@extends('layouts.app')

@section('title', 'comments')

@section('content')


    <p>Comments from the index view </p>
    
    <ul>

        @foreach ($comments as $comment)

        <div style="text-align: left;">
            <strong>
                <li> <a href="{{route('comments.show', ['id' => $comment->id]) }}"> Creator: {{ $comment->creator }} </li> {{$comment->content}}
            </strong>
        </div>

<ul>
<li>{{$comment->email}}</li>
</ul>
<div>&nbsp;</div>

<p>&nbsp;</p>

        @endforeach
    
    </ul>

    
@endsection

#Blank divs to create space and improve readability on web page.
#Lecture 10 @23:18 for photos routes, then look for more routes for more features.
