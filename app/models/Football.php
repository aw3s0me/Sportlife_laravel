<?php

class Football extends \Eloquent {
	protected $fillable = ['yel', 'red'];

    public function activity(){
        return $this->belongsTo('Activity');
    }
}