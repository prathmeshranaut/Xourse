@extends('layouts.main')

@section('content')
    <h1>Signup</h1>

    @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif

    {{ Form::open(['url' => 'signup', 'method' => 'post']) }}
    <p>
        {{ Form::label('email', 'Email'); }}
        {{ Form::text('email') }}
    </p>
    <p>
        {{ Form::label('username', 'Username'); }}
        {{ Form::text('username') }}
    </p>

    <p>
        {{ Form::label('password', 'Password'); }}
        {{ Form::password('password') }}
    </p>

    <p>
        {{ Form::label('password_confirm', 'Password Confirm'); }}
        {{ Form::password('password_confirm') }}
    </p>

    <p>
        {{ Form::submit('Signup!') }}
    </p>
    {{ Form::close() }}
@stop