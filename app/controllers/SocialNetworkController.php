<?php

class SocialNetworkController extends BaseController {

    /**
     * Post Model
     * @var Post
     */
    protected $post;

    /**
     * User Model
     * @var User
     */
    protected $user;

    /**
     * Inject the models.
     * @param Post $post
     * @param User $user
     */
    public function __construct(Post $post, User $user)
    {
        parent::__construct();

        $this->post = $post;
        $this->user = $user;
    }
    
    /**
     * Returns all the blog posts.
     *
     * @return View
     */
    public function getIndex()
    {
        // Get all the blog posts
        
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
        
    }

    /**
     * View a blog post.
     *
     * @param  string  $slug
     * @return Redirect
     */
    public function postView($slug)
    {

        $user = $this->user->currentUser();
        
    }
}
