<?php

class Post extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();

        $this->load->model("PostModel");
        $this->load->model("CommentModel");
    }

    public function public_get_all()
    {
        $posts = $this->PostModel->get_all();

        foreach ($posts as $post) {
            $post->comment_length = $this->CommentModel->get_all_length_by_post($post->id);
        }

        $this->load->view("home", ["posts" => $posts]);
    }

    public function public_get($id)
    {
        $post = $this->PostModel->get($id);
        $comments = $this->CommentModel->get_all_by_post($id);

        $this->load->view("post", [
            "post"     => $post,
            "comments" => $comments,
        ]);
    }

    private function is_logged_in()
    {
        return $this->session->has_userdata("usr_id");
    }

    public function index()
    {
        if (!$this->is_logged_in()) {
            return redirect(site_url("login"));
        }

        $posts = $this->PostModel->get_all();
        $this->load->view("posts/index", ["posts" => $posts]);
    }

    public function create()
    {
        if (!$this->is_logged_in()) {
            return redirect(site_url("login"));
        }

        $this->load->view("posts/create");
    }

    public function update($id)
    {
        if (!$this->is_logged_in()) {
            return redirect(site_url("login"));
        }

        $post = $this->PostModel->get($id);
        $this->load->view("posts/update", ["post" => $post]);
    }

    public function create_process()
    {
        if (!$this->is_logged_in()) {
            return redirect(site_url("login"));
        }

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
        if (!$this->is_logged_in()) {
            return redirect(site_url("login"));
        }

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
        if (!$this->is_logged_in()) {
            return redirect(site_url("login"));
        }

        $user_id = $this->session->userdata("usr_id");

        $this->PostModel->delete($id);
        redirect(site_url("dashboard"));
    }
    
}