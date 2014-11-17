<?php

class GroupController extends BaseController {

    /**
     * Post Model
     * @var Post
     */
    protected $post;

    /**
     * User Model
     * @var User
     */
    protected $admin;
    protected $group;

    /**
     * Inject the models.
     * @param Post $post
     * @param User $user
     */
    public function __construct(Post $post, Group $group)
    {
        parent::__construct();

        $this->post = $post;
        $this->group = $group;
    }
    
    /**
     * Returns all the blog posts.
     *
     * @return View
     */
    public function getIndex()
    {
        // Get all the blog posts
        $groups = Group::all();
        return View::make('site/groups/list', ['groups' => $groups]);
    }

    /**
     * View a blog post.
     *
     * @param  string  $slug
     * @return View
     * @throws NotFoundHttpException
     */
    public function getGroupView()
    {
        // Get group info
    }

    public function getGroupCreate()
    {
        return View::make('site/groups/create');
    }

    public function getGroupEdit($groupid)
    {
        $group = Group::find($groupid);
        if (!$group) {
            return Redirect::back()->with( 'error', 'Error' );
        }

        return View::make('site/groups/edit', ['group' => $group]);
    }

    public function postGroup() 
    {   
        $group = new Group;
        $group->name = Input::get('name');
        $group->email = Input::get('email');
        $group->address = Input::get('address');
        $group->telephone = Input::get('telephone');
        $group->save();
        $curUser = Auth::user();
        $curUserId = $curUser->id;

        $group->save();
        $groupId = $group->id;

        $group->users()->sync(array($curUserId));
        //$group->users()->withPivot(array('is_admin', 1));
        //$group->users()->withPivot('is_admin');
        //$group = Group::find();
        $group = Group::find($groupId)->first();
        $group->belongsToMany('User')->withPivot('is_admin');
        //Log::info(dd($group->pivot));
        //$group->pivot->is_admin = 1;
        //$group->users()->updateExistingPivot($curUserId, array( 'is_admin' => 1), false);
        $pivot = DB::table('group_user')->where('user_id', '=', $curUserId)->where('group_id', '=', $groupId)->update(array( 'is_admin' => 1));

        //$pivot[0]->is_admin = 1;
        //$pivot[0]->save();


        //$group->pivot->save();

        $groups = Group::all();
        return View::make('site/groups/list', ['groups' => $groups]);
    }

    public function enterGroup($groupid) 
    {
        $group = Group::find($groupid);
        
        if (!$group) return Redirect::back()->with( 'error', 'Error' );

        $userId = Auth::user()->id;
        $group->users()->sync(array($userId));

        $groups = Group::all();
        return View::make('site/groups/list', ['groups' => $groups]);

        //return Redirect::back()->with('message','Operation Successful !');
    }

    public function quitGroup($groupid)
    {
        $group = Group::find($groupid);
        
        if (!$group) return Redirect::back()->with( 'error', 'Error' );

        $userId = Auth::user()->id;
        $group->users()->detach(array($userId));

        $groups = Group::all();
        return View::make('site/groups/list', ['groups' => $groups]);

        //return Redirect::back()->with('message','Operation Successful !');
    }

    public function getGroupDetail($groupid)
    {
        $group = Group::find($groupid);

        if (!$group) return Redirect::back()->with( 'error', 'Error' );

        return View::make('site/groups/detail', ['group' => $group]);
    }

    public function editGroup($groupid)
    {
        $group = Group::find($groupid);

        if (!$group) return Redirect::back()->with( 'error', 'Error' );

        $group->name = Input::get('name');
        $group->email = Input::get('email');
        $group->address = Input::get('address');
        $group->telephone = Input::get('telephone');
        $group->save();

        return Redirect::back()->with('message','Operation Successful !');

    }

    public function removeGroup($groupid)
    {
        $group = Group::find($groupid);
        $userId = Auth::user()->id;
        $res = DB::table('group_user')->where('group_id', '=', $groupid)->delete();
        
        if (!$group || !$res) return Redirect::back()->with( 'error', 'Error' );

        $group->delete();
        //$group->users()->detach(array($userId));

        $groups = Group::all();
        return View::make('site/groups/list', ['groups' => $groups]);

        //return Redirect::back()->with('message','Operation Successful !');
    }

}
