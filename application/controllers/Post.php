<?php

class Post extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();

        $this->load->model("PostModel");
    }

    public function public_get_all()
    {
        $posts = $this->PostModel->get_all();
        $this->load->view("home", ["posts" => $posts]);
    }

    public function public_get($id)
    {
        $comments = [];

        $post = $this->PostModel->get($id);
        $this->load->view("post", [
            "post"     => $post,
            "comments" => $comments,
        ]);
    }

    private function is_logged_in()
    {
        if (!$this->session->has_userdata("usr_id")) {
            redirect(site_url("login"));
        }
    }

    public function index()
    {
        if ($this->is_logged_in()) {
            return;
        }

        $posts = $this->PostModel->get_all();
        $this->load->view("posts/index", ["posts" => $posts]);
    }

    public function create()
    {
        if ($this->is_logged_in()) {
            return;
        }

        $this->load->view("posts/create");
    }

    public function update($id)
    {
        if ($this->is_logged_in()) {
            return;
        }

        $post = $this->PostModel->get($id);
        $this->load->view("posts/update", ["post" => $post]);
    }

    public function create_process()
    {
        $user_id = $this->session->userdata("usr_id");

        $data = $this->input->post();
        $title   = "Untitled";
        $content = "";

        if (isset($data["title"])) {
            $title = $data["title"];
        }
        if (isset($data["content"])) {
            $content = $data["content"];
        }

        $this->PostModel->insert($title, $content, $user_id);
        redirect(site_url("dashboard"));
    }

    public function update_process($id)
    {
        $user_id = $this->session->userdata("usr_id");
        $data = $this->input->post();
        $post = $this->PostModel->get($id);
        $title   = $post->title;
        $content = $post->content;

        if ($data["title"]) {
            $title = $data["title"];
        }
        if ($data["content"]) {
            $content = $data["content"];
        }

        $this->PostModel->update($id, $title, $content);
        redirect(site_url("dashboard"));
    }


    public function delete_process($id)
    {
        $user_id = $this->session->userdata("usr_id");

        $this->PostModel->delete($id);
        redirect(site_url("dashboard"));
    }
    
}