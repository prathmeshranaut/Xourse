@extends('layouts.main')

@section('content')
    @if(Auth::user())
        <!-- {{ Auth::user()->username }} -->
        <!-- Logged in users -->
       <div class="navbar navbar-inverse"> 
        <div class="container">
        <div class="navbar-header">
            <a href="" class="navbar-brand"> APPY </a>           
        </div>
            <ul>
            <li class="right hover">{{ Form::open(['url' => 'search', 'method' => 'post']) }}
                    {{ Form::text('search', '', ['placeholder' => 'Search']) }}
                    {{ Form::close() }}
                </li>
                <li class="right hover"><a href="{{ URL::to('logout') }}">Logout</a></li>
               
                <li class="right hover"><a href="{{URL::to('user', ['username' => Auth::user()->username ])}}">{{ Auth::user()->username }}</a></li class="top">
                <li class="right hover"><a href="{{URL::to('course')}}">Courses</a></li>
                 <li class="right hover"><a href="{{URL::to('/')}}">Home</a></li>
                
            </ul>
        

        </div>
        </div>
    @else
        <!-- Non logged in users -->
       <div class="navbar navbar-inverse"> 
        <div class="container">
        <div class="navbar-header">
            <a href="" class="navbar-brand"> APPY </a>           
        </div>
            <ul>
            <li class="navbar-text navbar-right ">{{ Form::open(['url' => 'search', 'method' => 'post']) }}
                    {{ Form::text('search', '', ['placeholder' => 'Search']) }}
                    {{ Form::close() }}
                </li>
                <li class="navbar-text navbar-right "><a href="{{ URL::to('login') }}">Login</a></li>
               
                <li class="navbar-text navbar-right"><a href="{{ URL::to('signup') }}">Signup</a></li>
               
                
                
            </ul>
        

        </div>
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
        <p id="greet">To view all our courses,</p>  <br> <a class="btn-primary" href="{{ URL::to('login') }}">LOGIN</a>
    @endif


@stop