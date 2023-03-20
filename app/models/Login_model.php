<?php

class Login_model extends Model
{
    public function get_user($username)
    {
        $this->db->query(
            "SELECT
            user.id_user,
            user.password
            FROM user
            WHERE username=:username"
        );
        $this->db->bind("username", $username);
        return $this->db->single();
    }
}
