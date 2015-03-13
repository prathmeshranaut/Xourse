<?php

class Video extends \Eloquent {
	protected $fillable = [];

    public function course() {
        return $this->belongsTo('Course');
    }
}