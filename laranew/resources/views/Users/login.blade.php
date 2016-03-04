<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>

<h1>User Login</h1>
<hr>
</head>

<body>


{!! Form::open(['url'=>'/login'])!!}
<div class="form-group" style="width: 20%">


    {!! Form::label('email','Email:') !!}
    {!! Form::text('email',null,['class' =>'form-control']) !!}
    <br>
    {!! Form::label('password','Password:') !!}
    {!! Form::password('password',['class' =>'form-control']) !!}

    <br>
    {!! Form::submit('Login!',['class' =>'btn btn-primary form-control'])!!}
</div>

{!! Form::close()!!}

</body>


</html>

