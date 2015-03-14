<?php

class CoursesUser extends \Eloquent {
	protected $guarded = [];
    protected $table = 'course_user';

    public function courses() {
        return $this->belongsTo('Course');
    }
}