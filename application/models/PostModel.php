<?php

class PostModel extends CI_Model
{
    public function get_all() 
    {
        $db = $this->db;
        $db->select("posts.id, title, content, created_at, username");
        $db->from("posts");
        $db->order_by("created_at", "desc");
        $db->join("users", "users.id = user_id");

        return $db->get()->result();
    }

    public function get($id) 
    {
        $db = $this->db;
        $db->select("posts.id, title, content, created_at, username");
        $db->where("posts.id", $id);
        $db->from("posts");
        $db->join("users", "users.id = user_id");

        return $db->get()->row();
    }

    public function insert($title, $content, $user_id) 
    {
        return $this->db->insert("posts", [
            "title"   => $title,
            "content" => $content,
            "user_id" => $user_id, 
        ]);
    }

    public function update($id, $title, $content) 
    {
        return $this->db->update("posts", [
            "title"   => $title,
            "content" => $content,
        ], ["id" => $id]);
    }

    public function delete($id) 
    {
        return $this->db->delete("posts", ["id" => $id]);
    }
}
