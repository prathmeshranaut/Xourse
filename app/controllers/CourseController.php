<?php

class CourseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /course
	 *
	 * @return Response
	 */
	public function index()
	{
        $user_id = 0;
        if(Auth::user()) {
            $user_id = Auth::user()->id;
        }
        $courses = $this->parseCoursesForUser(Course::all(), $user_id);

		return View::make('courses.index')->withCourses($courses);
	}

    /**
     * Search for courses by tags
     */
    public function search() {
        $courses = Course::where('name', 'LIKE', "%" .Input::get('search'). "%")->orWhere('description', 'LIKE', '%'. Input::get('search'). '%')->get();

        return View::make('courses.search')->withCourses($courses);
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /course/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /course
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /course/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $course = [];
        $videos = [];
        $reviews = [];
        $hasRated = 0;

        try {
            $course = Course::whereId($id)->firstOrFail();
            $videos = $course->videos;
            $reviews = $course->ratings;
            $user_id = 0;
            if(Auth::user()) {
                $user_id = Auth::user()->id;
            }
            $hasRated = Rating::whereUserId($user_id)->whereCourseId($course->id)->count();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {

        }
		return View::make('courses.show')
            ->withCourse($course)
            ->withVideos($videos)
            ->withReviews($reviews)
            ->withHasRated($hasRated);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /course/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /course/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /course/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function join($id) {
        $user_id = Auth::user()->id;
        $course_id = $id;

        CoursesUser::create(['user_id' => $user_id, 'course_id' => $course_id]);

        return Redirect::to('course/'.$course_id);
    }

    private function parseCoursesForUser($courses, $userId)
    {
        $userCourses = CoursesUser::whereUserId($userId)->get();

        $uCourses = [];

        foreach($userCourses as $course) {
            $uCourses[] = Course::whereId($course->course_id)->first();
        }

        $courses = $courses->toArray();

        foreach($courses as &$course) {
            $course['is_joined'] = false;
            foreach($uCourses as $userCourse) {
                if($course['id'] == $userCourse->id) {
                    $course['is_joined'] = true;
                    break;
                } else {
                    $course['is_joined'] = false;
                }
            }
        }

        return $courses;
    }

    public function rate($id) {
        Rating::create([
            'course_id' => $id,
            'user_id' => Auth::user()->id,
            'stars' => Input::get('stars'),
            'review' => Input::get('review'),
        ]);

        return Redirect::to('course/'. $id);
    }
}