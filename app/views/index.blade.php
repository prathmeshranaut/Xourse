@extends('layouts.main')

@section('content')
    <h1>Appy</h1>
    @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif

    @if(Auth::user()->username)
        {{ Auth::user()->username }}
    @endif


@stop