@extends('layouts.main')

@section('content')
    @if(Auth::user())
        <!-- {{ Auth::user()->username }} -->
        <!-- Logged in users -->
       <div class="topbar"> 
        <paper-tabs class="top">
            <div class="hover left"><paper-button class="left tab"><a href="{{URL::to('/')}}">Home</a></paper-button></div>
            <div class="hover left"><paper-button class="left tab"><a href="{{URL::to('user', ['username' => Auth::user()->username ])}}">{{ Auth::user()->username }}</a></paper-button class="top"></div>
            <div class="hover left"><paper-button class="left tab"><a href="{{URL::to('course')}}">Courses</a></paper-button></div>
            <div class="gap"></div>
            <div class="right"><paper-button class="right tab">{{ Form::open(['url' => 'search', 'method' => 'post']) }}
                    {{ Form::text('search', '', ['placeholder' => 'Search']) }}
                {{ Form::close() }}
            </paper-button></div>
            <div class="hover right"><paper-button class="right tab"><a href="{{ URL::to('logout') }}">Logout</a></paper-button></div>
        </paper-tabs>
        </div>
    @else
        <!-- Non logged in users -->
        <div class="topbar">
        <div class="gapa"></div>
        <div class="right"><paper-button class="right tab">{{ Form::open(['url' => 'search', 'method' => 'post']) }}
                    {{ Form::text('search', '', ['placeholder' => 'Search']) }}
                {{ Form::close() }}
            </paper-button></div>
        <paper-tabs class="topbar">
            <div class="hover right"><paper-button class="right tab"><a href="{{URL::to('login')}}">Login</a></paper-button></div>
            <div class="hover right"><paper-button class="right tab"><a href="{{URL::to('signup')}}">Sign Up</a></paper-button></div>
        </paper-tabs>
        </div>
    @endif

    <div class="wrapper">
    
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