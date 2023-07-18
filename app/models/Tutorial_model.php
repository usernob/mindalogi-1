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
    public function checkProgress($id_user, $id_tutorial)
    {
        $this->db->query(
            "SELECT id_user FROM progress WHERE id_user=:id_user AND id_tutorial=:id_tutorial"
        );
        $this->db->bind("id_user", $id_user);
        $this->db->bind("id_tutorial", $id_tutorial);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function addTutorialProgress($id_user, $id_tutorial)
    {
        $this->db->query(
            "INSERT INTO progress(id_user, id_tutorial) VALUES (:id_user, :id_tutorial)"
        );
        $this->db->bind("id_user", $id_user);
        $this->db->bind("id_tutorial", $id_tutorial);
        $this->db->execute();
    }
    public function setComplete($id_user, $id_tutorial)
    {
        $this->db->query(
            "UPDATE progress SET complete=1 WHERE id_user=:id_user AND id_tutorial=:id_tutorial"
        );
        $this->db->bind("id_user", $id_user);
        $this->db->bind("id_tutorial", $id_tutorial);
        $this->db->execute();
    }
}
