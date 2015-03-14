@extends('layouts.main')

@section('navigation')
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-ex">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('/') }}">Xourse</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-ex">
                <ul class="nav navbar-nav navbar-right">
                    {{ Form::open(['url' => 'search', 'method' => 'post', 'class' => 'navbar-form navbar-left']) }}
                    <div class="form-group">
                        {{ Form::text('search', '', ['placeholder' => 'Search', 'class' => 'form-control']) }}
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                    {{ Form::close() }}
                    @if(Auth::user())
                        <li><a href="{{ URL::to('/')}}">Home</a>
                        <li><a href="{{ URL::to('course')}}">Courses</a></li>
                        <li><a href="{{ URL::to('user', ['username' => Auth::user()->username ])}}">{{ Auth::user()->username }}</a></li>
                        <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                    @else
                        <li class=""><a href="{{ URL::to('login') }}">Login</a></li>
                        <li class=""><a href="{{ URL::to('signup') }}">Signup</a></li>
                    @endif
                    {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu" role="menu">--}}
                    {{--<li><a href="#">Action</a></li>--}}
                    {{--<li><a href="#">Another action</a></li>--}}
                    {{--<li><a href="#">Something else here</a></li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li><a href="#">Separated link</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </nav>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <h1>Search Courses - {{ Input::get('search') }}</h1>
        </div>
        @foreach($courses as $course)
            <div class="row">
                <div class="col-md-12">
                    @include('template.course', ['course' => $course])
                </div>
            </div>
        @endforeach
    </div>
@stop