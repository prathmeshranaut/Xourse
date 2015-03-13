@extends('layouts/main')

@section('content')
    @if($video)
        <article>
            <h1>{{ $video->title }}</h1>
            <p>{{ $video->description }}</p>
            <p>{{ $video->length }}</p>
        </article>
    @else
        <p>It was a mirage in the desert. No water here!</p>
    @endif
@stop