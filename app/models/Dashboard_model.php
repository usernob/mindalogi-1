<?php
class Dashboard_model extends Model
{
    public function getUserInfo($id)
    {
        $this->db->query(
            "SELECT 
            user.username,
            user.avatar
            FROM user WHERE id_user=:id"
        );
        $this->db->bind("id", $id);
        return $this->db->single();
    }
}
