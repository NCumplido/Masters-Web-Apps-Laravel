@extends('layouts.app')

@section('title', 'Create user')

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

    <form method="POST" action="{{ route('users.store') }}">

        @csrf

        {{--See Laravel docs for "old" helper --}}

        <p>Name: <input type="text" name="name" value="{{ old('name') }}"></p>

        <p>Email: <input type="email" name="email" value="{{ old('email') }}"></p>
        
        <p>Password: <input type="password" name="password" ></p>

        {{--'Admin','Moderator', 'Contributor' --}}
        <p>Role: <input type="text" name="role" value="{{ old('role') }}"></p>

        {{-- Change the size to 0, use this for honeypot: <p>Age: <input type="age" name="age" ></p> --}}

        <input type="submit" value="Submit">

        <a href="{{ route('blogposts.index') }}">Cancel</a>
    
    </form>

@endsection
              