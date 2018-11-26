<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="flex-center position-ref full-height">
    @if(isset(Auth::user()->name))
        <div class="top-right links">
            <a href="{{ url('/') }}">Front Page</a>
            <a href="{{ route('logout') }}">Logout</a>
        </div>

        <div class="content">
            <div class="title m-b-md">
                Dashboard
            </div>
            <h1>Welcome {{ Auth::user()->name }} !</h1>
        </div>

    @endif
</div>
</body>
</html>