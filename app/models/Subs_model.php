<?php
class Subs_model extends Model
{
    public function addPremium($id)
    {
        $this->db->query(
            "UPDATE user SET tier=:tier WHERE id_user=:id"
        );
        $this->db->bind("tier", "premium");
        $this->db->bind("id", $id);
        $this->db->execute();
    }
}
