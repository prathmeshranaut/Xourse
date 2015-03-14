@extends('layouts.main')

@section('content')
    <h1>Courses</h1>

    @foreach($courses as $course)
        <article>
            <h1><a href="{{ URL::to('course/'. $course['id']) }}">{{ $course['name'] }}</a></h1>
            <p>{{ $course['description'] }}</p>
            <p>Views: {{ $course['views'] }}</p>
            <p>Total Length: {{ $course['total_length'] }} seconds TODO: Convert to minutes and hours</p>
            <p>Difficulty: {{ $course['difficulty'] }}</p>
            @if($course['is_joined'])
                <p><a href="{{ URL::to('course/'. $course['id']) }}">View Course</a></p>
            @else
                <p><a href="{{ URL::to('course/join/' . $course['id']) }}">Join Course</a></p>
            @endif
        </article>
    @endforeach
@stop