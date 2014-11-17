<?php

class Group extends \Eloquent {

    public function users() {
        return $this->belongsToMany('User');
    }

    public function user_in_group() 
    {
        $groupId = $this->id;
        $userId = Auth::user()->id;
        $res = DB::table('group_user')->where('user_id', '=', $userId)->where('group_id', '=', $groupId)->get();
        return $res? true : false;
    }

    public function is_user_admin()
    {
        $groupId = $this->id;
        $userId = Auth::user()->id;
        $res = DB::table('group_user')->where('user_id', '=', $userId)->where('group_id', '=', $groupId)->get();
        //Log::info(dd($res[0]));
        $is_admin = $res[0]->is_admin;
        return $res && ($is_admin === 1);
    }
 }