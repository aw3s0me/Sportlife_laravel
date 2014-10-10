<?php

class Group extends \Eloquent {
	protected $fillable = [];
    protected $guarded = array();

    public function users() {
        return $this->belongsToMany('User');
    }
 }