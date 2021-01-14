<?php

class Post extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();

        $this->load->model("PostModel");
    }

    public function index()
    {
        $posts = $this->PostModel->get_all();
        $this->load->view("posts/index", ["posts" => $posts]);
    }

    public function public_get_all()
    {
        $posts = $this->PostModel->get_all();
        $this->load->view("home", ["posts" => $posts]);
    }

    public function public_get($id)
    {
        $post = $this->PostModel->get($id);
        $this->load->view("post", ["post" => $post]);
    }
    
}