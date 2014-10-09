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
    public function getView($slug)
    {
        // Get group info
    }

    /**
     * View a blog post.
     *
     * @param  string  $slug??
     * @return Redirect
     */
    public function postView($slug)
    {
        //creation of group
    }
}
