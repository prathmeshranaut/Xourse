@extends('layouts.main')

@section('content')
    <div class="wrapper">
    @if(Auth::user())
        {{ Auth::user()->username }}
        <!-- Logged in users -->
        <paper-tabs class="top">
            <paper-button class="top"><a href="{{URL::to('/')}}">Home</a></paper-button>
            <paper-button class="top"><a href="{{URL::to('user', ['username' => Auth::user()->username ])}}">{{ Auth::user()->username }}</a></paper-button class="top">
            <paper-button class="top"><a href="{{URL::to('course')}}">Courses</a></paper-tab>
            <paper-button class="top">{{ Form::open(['url' => 'search', 'method' => 'post']) }}
                    {{ Form::text('search', '', ['placeholder' => 'Search']) }}
                {{ Form::close() }}
            </paper-button class="top">
            <paper-button class="top"><a href="{{ URL::to('logout') }}">Logout</a></paper-button>
        </paper-tabs>
    @else
        <!-- Non logged in users -->
        <paper-tabs class="top">
            <paper-button class="tab"><a href="{{URL::to('login')}}">Login</a></paper-button>

        </paper-tabs>
    @endif
    <h1>Appy</h1>
    @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif

    @if(Auth::user())
        {{ Auth::user()->username }}
        <!-- Logged in users -->
        
    @else
        <!-- Non logged in users -->
        <p id="greet">To view all our courses,</p>  <br> <paper-button raised="true" class="login"><a href="{{ URL::to('login') }}">login</a></paper-button>
    @endif


@stop