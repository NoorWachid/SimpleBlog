<?php

class Page extends CI_Controller
{
    public function about()
    {
        $this->load->view("about");
    }

    public function login()
    {
        $this->load->view("login");
    }
}