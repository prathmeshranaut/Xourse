<?php

class Course extends \Eloquent {
	protected $fillable = [];

    public function videos() {
        $this->hasMany('Video');
    }
}