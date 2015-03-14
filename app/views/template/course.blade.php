<article>
    <h1><a href="{{ URL::to('course/'. $course['id']) }}">{{ $course['name'] }}</a></h1>

    <p class="description">{{ str_limit($course['description'], $limit = 150, $end = '...') }}</p>

    <p>
        <span class="label label-default">Views: {{ $course['views'] }}</span>
        <span class="label label-info">Length: {{ $course['total_length'] }}</span>
        <span class="label label-warning">Difficulty: {{ $course['difficulty'] }}</span>



    @if($course['is_joined'])
        <a href="{{ URL::to('course/'. $course['id']) }}" class="btn btn-primary btn-view-course pull-right">View
                Course</a>
    @else
        <a href="{{ URL::to('course/join/' . $course['id']) }}" class="btn btn-primary btn-view-course pull-right">Join
                Course</a>
    @endif
    </p>
    <p class="clearfix"></p>
</article>