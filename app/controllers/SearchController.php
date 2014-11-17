<?php

class SearchController extends BaseController {

    public function __construct()
    {
        parent::__construct();
    }

    public function doSearch()
    {
        $str = Input::get('str');
        $groups = DB::table('groups')->where('name', 'LIKE', '%'. $str .'%')->get();
        $users = DB::table('users')->where('username', 'LIKE', '%'. $str .'%')->get();

        return View::make('site/search', ['groups' => $groups, 'users' => $users]);
    }
    
}
