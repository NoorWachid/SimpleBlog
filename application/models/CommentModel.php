<?php

class CommentModel extends CI_Model
{
	public function get_all_by_post($id)
	{
		$db = $this->db;
        $db->select("comments.id, content, created_at, username");
        $db->where("post_id", $id);
        $db->from("comments");
        $db->join("users", "users.id = user_id");
	}

	public function get($id) 
	{
		$db = $this->db;
        $db->select("comments.id, content, created_at, username");
        $db->where("comments.id", $id);
        $db->from("comments");
        $db->join("users", "users.id = user_id");
	}

    public function insert($content, $post_id, $user_id) 
    {
        return $this->db->insert("comments", [
            "content" => $content,
            "post_id" => $post_id, 
            "user_id" => $user_id, 
        ]);
    }

    public function update($id, $content) 
    {
        return $this->db->update("comments", [
            "content" => $content,
        ], ["id" => $id]);
    }

    public function delete($id) 
    {
        return $this->db->delete("comments", ["id" => $id]);
    }
}