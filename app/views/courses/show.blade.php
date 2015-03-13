@extends('layouts.main')

@section('content')
    @if($course)
        <article>
            <h1><a href="{{ URL::to('course/'. $course->id) }}">{{ $course->name }}</a></h1>
            <p>{{ $course->description }}</p>
            <p>Views: {{ $course->views }}</p>
            <p>Upvotes: {{ $course->upvotes }}</p>
            <p>Downvotes: {{ $course->downvotes }}</p>
            <p>Total Length: {{ $course->total_length }} seconds TODO: Convert to minutes and hours</p>
            <p>Difficulty: {{ $course->difficulty }}</p>
            <p>Source Url: <a href="{{ $course->source_url }}">{{ $course->source }}</a></p>
        </article>
    @else
        <p>It was just a mirage. Nothing exists here!</p>
    @endif
@stop