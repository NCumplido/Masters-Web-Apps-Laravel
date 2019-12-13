<!doctype html>
<html>

<head>

  <title>SwanBlog - @yield('title')</title>

</head>

<body>

    <h1>SwanBlog - @yield('title')</h1>

    @if (session('message'))

    {{-- ToDo: I should make this dynamic --}}
      <p><b>{{ session('message') }}</b></p>

    @endif

    @if ($errors->any())
      <div>
        {{-- ToDo: take a look at the documentation for this tag: <Errors:> --}}
            Errors:
        <ul>

          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        
        </ul>

        {{--</Errors:>--}}
      </div>
    @endif

    <div> @yield('content') </div>

</body>
</html>
