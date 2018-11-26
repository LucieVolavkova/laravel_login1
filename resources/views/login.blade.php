<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="form-content">
        <div class="title m-b-md">
            Login
        </div>
    {{ Form::open(array('url' => 'login')) }}
    <!-- if there are login errors, show them here -->
        @if($errors->any())
            <div class="form-error">
                @foreach ($errors->all(':message') as $input_error)
                {{ $input_error }} </br>
                @endforeach
            </div>
        @endif

        <div class="form-group">
            <p>{{ Form::label('name', 'Name') }}</p>
            <p>{{ Form::text('name', old('name'), ['class' => 'form-input'])}}</p>
        </div>
        <div class="form-group">
            <p>{{ Form::label('password', 'Password') }}</p>
            <p>{{ Form::password('password',['class' => 'form-input']) }}</p>
        </div>
        {{ Form::submit('Submit',['class' => 'btn']) }}
        {{ Form::close() }}
    </div>
</div>
</body>
</html>