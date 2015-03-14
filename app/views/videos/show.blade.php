@extends('layouts/main')

@section('content')
    @if($video)
        <article>
            <h1>{{ $video->title }}</h1>
            <p><iframe width="420" height="315" src="https://www.youtube.com/embed/tYVzcgHP4lM" frameborder="0" allowfullscreen></iframe></p>
            <p>{{ $video->description }}</p>
            <p>{{ $video->length }}</p>
        </article>
    @else
        <p>It was a mirage in the desert. No water here!</p>
    @endif
@stop