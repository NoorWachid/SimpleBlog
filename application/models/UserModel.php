<?php

class UserModel extends CI_Model
{
    private $table = "users";

    public function has_username($username) {
        $query = $this->db->get_where($this->table, [
            "username" => $username
        ]);

        return $query->num_rows() > 0;
    }

    public function get($username) {
        return $this->db->get_where($this->table, [
            "username" => $username
        ])->row();
    }
}