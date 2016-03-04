
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <h1>User Registration</h1>
<hr>
 </head>

<body>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



{!! Form::open(['url'=>'/login'])!!}
<div class="form-group" style="width: 20%">
{!! Form::label('First Name','First Name:') !!}
{!! Form::text('FirstName',null,['class' =>'form-control']) !!}
<br>
{!! Form::label('Last Name','Last Name:') !!}
{!! Form::text('LastName',null,['class' =>'form-control']) !!}
<br>
{!! Form::label(' Username','Username:') !!}
{!! Form::text('userName',null,['class' =>'form-control']) !!}
<br>
{!! Form::label('email','Email:') !!}
{!! Form::text('email',null,['class' =>'form-control']) !!}
<br>
{!! Form::label('password','Password:') !!}
{!! Form::password('password',['class' =>'form-control']) !!}
<br>
    {!! Form::label('address','Address:') !!}
    {!! Form::text('Address',null,['class' =>'form-control']) !!}
    <br>
    {!! Form::label('phone','Phone:') !!}
    {!! Form::text('phone',null,['class' =>'form-control']) !!}
    <br>
{!! Form::submit('Register!',['class' =>'btn btn-primary form-control'])!!}
</div>

{!! Form::close()!!}

</body>