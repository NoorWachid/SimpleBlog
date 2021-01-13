<?php

class UserModel extends CI_Model
{
    private $table = "users";

    public function has_username($username) {
        $row = $this->db->get_where($this->table, [
            "username" => $username
        ])->row();

        return !!$row;
    }

    public function get_password($username) {
        return $this->db->get_where($this->table, [
            "username" => $username
        ])->row();
    }
}