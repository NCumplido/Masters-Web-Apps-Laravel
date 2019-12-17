@extends('layouts.app')

@section('title', 'Create comment')

@section('content')

{{-- 
    https://laravel.com/docs/5.8/validation#quick-defining-the-routes

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
--}}

   {{-- <form method="POST" action="{{ route('comments.store') }}">

        @csrf

        <p>Title: <input type="text" name="title" value="{{ old('title') }}"></p>

        <p>Content: <input type="text" name="content" value="{{ old('content') }}"></p>

        <p>Topic: <input type="text" name="topic" value="{{ old('topic') }}"></p>

        <input type="submit" value="Submit">

        <a href="{{ route('home') }}">Cancel</a>
    
    </form> --}}

@endsection

        {{--See Laravel docs for "old" helper --}}
        {{--ToDo: This form needs work, the user shouldn't have to input everything again --}}
        {{--<p>Name: <input type="text" name="creator" value="{{ old('creator') }}"></p>--}}
        {{--<p>Email: <input type="email" name="email" value="{{ old('email') }}"></p>--}}
        {{--<p>Votes: <input type="text" name="votes" value="{{ old('votes') }}"></p>--}}

        {{--Dropdown menu
            <p>Topic: <input type="text" name="topic" value="{{ old('topic') }}"> 
            
            http://form.guide/php-form/php-form-select.html
            http://form.guide/php-form/php-form-validation.html
            
            What is the topic?
            <select name="formTopic">             
              <option value="">Select...</option>            
              <option value="Funny">Funny</option>            
              <option value="Food">Food</option>
              <option value="Cats">Cats</option>
              <option value="Dogs">Dogs</option>
              <option value="Video Games">Video Games</option>            
            </select>
        </p> --}}
        {{-- Change the size to 0, use this for honeypot: <p>Age: <input type="age" name="age" ></p> --}}
              