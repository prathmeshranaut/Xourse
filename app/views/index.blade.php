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
            <li><a href="{{URL::to('course')}}">Courses</a></li>
            <li>{{ Form::open(['url' => 'search', 'method' => 'post']) }}
                    {{ Form::text('search', '', ['placeholder' => 'Search']) }}
                {{ Form::close() }}
            </li>
            <li><a href="{{ URL::to('logout') }}">Logout</a></li>
        </ul>
    @else
        <!-- Non logged in users -->
        <p>Login to view awesome courses! For viewing all the courses <a href="{{ URL::to('login') }}">login.</a></p>
    @endif


@stop