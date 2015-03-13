@extends('layouts.main')

@section('content')
    <h1>Login</h1>

    {{ Form::open(['url' => 'user', 'method' => 'post']) }}
    <p>
        {{ Form::label('email', 'Username'); }}
        {{ Form::text('username') }}
    </p>

    <p>
        {{ Form::label('password', 'Password'); }}
        {{ Form::password('password') }}
    </p>

    <p>
        {{ Form::submit('Login!') }}
    </p>
    {{ Form::close() }}
@stop