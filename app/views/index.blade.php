@extends('layouts.main')

@section('content')
    <h1>Appy</h1>
    @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif

    @if(Auth::user())
        {{ Auth::user()->username }}
        <!-- Logged in users -->
        <ul>
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('/')}}">Courses</a></li>
            <li>{{ Form::open(['url' => 'search']) }} {{ Form::text('search', 'Search') }}{{ Form::close() }}</li>
        </ul>
    @else
        <!-- Non logged in users -->
    @endif


@stop