<?php
class Dashboard_model extends Model
{
    public function getUserInfo($id, $params)
    {
        $this->db->query(
            "SELECT " . $params . " FROM user WHERE id_user=:id"
        );
        $this->db->bind("id", $id);
        return $this->db->single();
    }
    public function updateUser($id, $post)
    {
        $this->db->query("UPDATE user SET username = :username, email = :email, no_hp = :no_hp, tempat_lahir = :tempat_lahir, tanggal_lahir = :tanggal_lahir WHERE user.id_user = :id");
        $this->db->bind("id", $id);
        $this->db->bind("username", $post["username"]);
        $this->db->bind("email", $post["email"]);
        $this->db->bind("no_hp", $post["no_hp"]);
        $this->db->bind("tempat_lahir", $post["tempat_lahir"]);
        $this->db->bind("tanggal_lahir", $post["tanggal_lahir"]);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function updateAvatar($id, $image)
    {
        $this->db->query("UPDATE user SET avatar = :avatar WHERE user.id_user = :id");
        $this->db->bind("id", $id);
        $this->db->bind("avatar", $image, PDO::PARAM_LOB);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getProgress($id)
    {
        $this->db->query(
            "SELECT complete, COUNT(complete) as count FROM progress WHERE id_user = :id GROUP BY complete"
        );
        $this->db->bind("id", $id);
        return $this->db->resultSet();
    }
    public function getTutorial($tier)
    {
        $this->db->query(
            "SELECT * FROM tutorial WHERE prices=:prices"
        );
        $this->db->bind("prices", $tier);
        return $this->db->resultSet();
    }
}
