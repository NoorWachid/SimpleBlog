<?php

class UserModel extends CI_Model
{
    public function get($username) 
    {
        $this->db->select("id, username, password");
        $this->db->from("users");
        $this->db->like("LOWER(username)", strtolower($username));

        return $this->db->get()->row();
    }
}