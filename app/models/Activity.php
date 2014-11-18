<?php

class Activity extends \Eloquent {
	protected $fillable = ['num', 'spent'];

    public function users() {
        return $this->belongsToMany('User');
    }

    public function football() {
        return $this->hasOne('Football');
    }

    public function jog() {
        return $this->hasOne('Jog');
    }

    public function wlift() {
        return $this->hasOne('Wlift');
    }
}