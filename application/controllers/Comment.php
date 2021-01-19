<?php

class Comment extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();

        $this->load->model("CommentModel");
    }

    private function is_logged_in()
    {
        return $this->session->has_userdata("usr_id");
    }

	public function create_process()
	{
		if (!$this->is_logged_in()) {
            return redirect(site_url("login"));
		}

		// TODO: add validations
        $user_id = $this->session->userdata("usr_id");
        $data    = $this->input->post();
        $post_id = $data["post_id"];
        $content = $data["content"];

        if (!empty($content)) {
        	$this->CommentModel->insert($content, $post_id, $user_id);
        } 

        redirect(site_url("post/" . $post_id));
	}
}