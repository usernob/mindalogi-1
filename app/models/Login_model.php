<?php

class Login_model extends Model
{
    public function get_user($param)
    {
        $this->db->query(
            "SELECT
            user.id_user,
            user.password
            FROM user
            WHERE username=:params
            OR email=:params"
        );
        $this->db->bind("params", $param);
        return $this->db->single();
    }
}
