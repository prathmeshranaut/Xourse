<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
        $user_id = 0;
        if(Auth::user()) {
            $user_id = Auth::user()->id;
        }
        $courses = $this->parseCoursesForUser(Course::all(), $user_id);
		return View::make('index')->withCourses($courses);
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
}
