@extends('layouts.main')

@section('content')
    @if($course)
        <article>
            <h1>{{ $course['name'] }}</h1>
            <p>{{ $course['description'] }}</p>
            <p>Views: {{ $course['views'] }}</p>
            <p>Upvotes: {{ $course['upvotes'] }}</p>
            <p>Downvotes: {{ $course['downvotes'] }}</p>
            <p>Total Length: {{ $course['total_length'] }} seconds TODO: Convert to minutes and hours</p>
            <p>Difficulty: {{ $course['difficulty'] }}</p>
            <p>Source Url: <a href="{{ $course['source_url'] }}">{{ $course['source'] }}</a></p>
        </article>

        <h2>Videos</h2>

        @foreach($videos as $video)
            <p><a href="{{ URL::to('video/'. $video->id) }}">{{ $video->title }}</a></p>
            <p>{{ $video->description }}</p>
            <p>{{ $video->length }}</p>
        @endforeach

        <h2>Ratings</h2>
        @foreach($reviews as $review)
            <p>Stars: {{ $review->stars }}</p>
            <p>{{$review->review}}</p>
            <p>{{ \Carbon\Carbon::createFromTimestamp(strtotime($review->created_at))->diffForHumans() }}</p>
        @endforeach
    @else
        <p>It was just a mirage. Nothing exists here!</p>
    @endif
@stop