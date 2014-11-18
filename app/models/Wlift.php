<?php

class Wlift extends \Eloquent {
	protected $fillable = ['weight'];

    public function activity(){
        return $this->belongsTo('Activity');
    }
}