<?php

class PostModel extends CI_Model
{
    public function get_all() 
    {
        $db = $this->db;
        $db->select("posts.id, title, content, created_at, username");
        $db->from("posts");
        $db->join("users", "users.id = user_id");

        return $db->get()->result();
    }

    public function get($id) 
    {
        $db = $this->db;
        $db->select("title, content, created_at, username");
        $db->where("posts.id", $id);
        $db->from("posts");
        $db->join("users", "users.id = user_id");

        return $db->get()->row();
    }
}
