@extends('layouts.main')

@section('content')
    <h1>{{ $user->username }}</h1>
    <img src="http://gravatar.com/avatar/{{ md5(strtolower($user->email)) }}">

    <h2>Courses</h2>
    @foreach($courses as $course)
        <p><a href="{{ URL::to('course/'. $course->id) }}">{{ $course->name }}</a></p>
        <p>{{ $course->description }}</p>
        <p>{{ $course->views }}</p>
    @endforeach

    <h2>Ratings</h2>

    @foreach($ratings as $rating)
        <p>Star: {{ $rating->stars }}</p>
        <p>{{ $rating->review }}</p>
        <p>{{ \Carbon\Carbon::createFromTimestamp(strtotime($rating->created_at))->diffForHumans() }}</p>
    @endforeach
@stop