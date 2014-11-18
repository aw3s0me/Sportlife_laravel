<?php

class Jog extends \Eloquent {
	protected $fillable = ['pulse', 'place'];

    public function activity(){
        return $this->belongsTo('Activity');
    }
}