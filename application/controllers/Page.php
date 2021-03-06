<?php

class Page extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();

        $this->load->model("UserModel");
    }

    public function about()
    {
        $this->load->view("about");
    }

    public function login()
    {
        if ($this->session->has_userdata("usr_id")) {
            redirect(site_url("dashboard"));
        }

        $this->load->view("login");
    }

    public function login_process()
    {
        $this->load->library("form_validation");
        $this->load->library("session");

        $ff = $this->form_validation;
        $ss = $this->session;

        $username = $this->input->post("username");

        $ff->set_rules("username", "Username", "required");
        $ff->set_rules("password", "Password", "required");
        $ss->set_flashdata("prv_username", $username);

        if (!$ff->run()) {
            if (!$username) {
                $ss->set_flashdata("msg_username", "Username required");
            }
            $ss->set_flashdata("msg_password", "Password required");
            redirect(site_url("login"));
            return;
        }

        $user = $this->UserModel->get($username);

        if ($user == null) {
            $ss->set_flashdata("msg_username", "Username doesn't exist");
            redirect(site_url("login"));
            return;
        }

        if (!password_verify($this->input->post("password"), $user->password)) {
            $ss->set_flashdata("msg_password", "Password doesn't match");
            redirect(site_url("login"));
            return;
        }

        $ss->set_userdata("usr_id", $user->id);
        $ss->set_userdata("usr_username", $user->username);
        redirect(site_url("dashboard"));
    }

    public function logout_process()
    {  
        $this->session->unset_userdata("usr_id");
        $this->session->unset_userdata("usr_username");
        redirect(site_url("login"));
        return;
    }
}