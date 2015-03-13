@extends('layouts/main')

@section('content')
    <h1>Courses</h1>


    @foreach($courses as $course)
        <article>
            <h1>{{ $course->name }}</h1>
            <p>{{ $course->description }}</p>
            <p>Views: {{ $course->views }}</p>
            <p></p>
        </article>
    @endforeach
@stop