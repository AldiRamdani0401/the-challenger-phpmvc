<?php

class Admin_model {
    private $table_admin = "tb_admin";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function loginAdmin($data)
    {
        $check = "SELECT username, password FROM " .$this->table_admin. " WHERE username = :username AND password = :password";

        $this->db->query($check);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->execute();

        $result = $this->db->rowCount();

        if($result > 0){
            return true;
        } else {
            return false;
        }
    }
}