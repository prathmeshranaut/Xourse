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
        $courses = Course::all();
		return View::make('courses.index')->withCourses($courses);
	}

    /**
     * Search for courses by tags
     */
    public function search() {
        echo "You searched for " . Input::get('search');
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
        try {
            $course = Course::whereId($id)->firstOrFail();
            $videos = $course->videos;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $course = null;
        }

		return View::make('courses.show')
            ->withCourse($course)
            ->withVideos($videos);
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

}