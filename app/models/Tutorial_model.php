<?php
class Tutorial_model extends Model
{
    public function getTutorialById($viewtutorial)
    {
        $this->db->query(
            "SELECT * FROM tutorial where id_tutorial=:id"
        );
        $this->db->bind("id", $viewtutorial);
        return $this->db->single();
    }
}
