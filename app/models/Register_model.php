<?php
class Register_model extends Model
{
    public function get($key, $value)
    {
        $this->db->query("SELECT COUNT(*) as total FROM user WHERE $key=:value");
        $this->db->bind("value", $value);
        return $this->db->single();
    }
    public function newSignup($data)
    {
        $password = password_hash($data["password"], PASSWORD_DEFAULT);
        $this->db->query("INSERT INTO user (username, password, no_hp) VALUES (:username, :password, :no_hp)");
        $this->db->bind("username", $data["username"]);
        $this->db->bind("password", $password);
        $this->db->bind("no_hp", $data["no_hp"]);
        $this->db->execute();
        return $this->db->dbh->lastInsertId();
    }
}
