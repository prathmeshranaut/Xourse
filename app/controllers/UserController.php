<?php

class UserController extends \BaseController
{

    /**
     * Login for the user
     */
    public function login()
    {
        return View::make('users.login');
    }


    /**
     * Display a listing of the resource.
     * GET /user
     *
     * @return Response
     */
    public function index()
    {
        return View::make('users.login');
    }

    /**
     * Show the form for creating a new resource.
     * GET /user/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.signup');
    }

    /**
     * Store a newly created resource in storage.
     * POST /user
     *
     * @return Response
     */
    public function store()
    {
        $user = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];

        if (Auth::attempt($user)) {
            return Redirect::route('home')->with('flash_notice', 'You are successfully logged in.');
        }

        return Redirect::route('login')->with('flash_notice', 'Incorrect username/password combination!')->withInput();
    }

    public function signup()
    {
        Auth::logout();
        $input = Input::except('password_confirm');
        $input['password'] = Hash::make($input['password']);

        User::create($input);

        return Redirect::route('home')->with('flash_notice', 'Created your account!');
    }

    /**
     * Display the specified resource.
     * GET /user/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = User::whereUsername($id)->first();
        $user_id = 0;
        if(Auth::user()) {
            $user_id = Auth::user()->id;
        }
        $courses = $this->parseCoursesForUser($user->courses, $user_id);

        $ratings = $user->ratings->reverse();

        return View::make('users.show')
            ->withUser($user)
            ->withCourses($courses)
            ->withRatings($ratings);
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

    /**
     * Show the form for editing the specified resource.
     * GET /user/{id}/edit
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /user/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /user
     *
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();
        return Redirect::route('home');
    }

}