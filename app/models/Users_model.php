<?php

class Users_model
{
    private $table_users = "tb_users";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function loginUser($data)
    {
        $check = "SELECT username, password FROM " .$this->table_users. " WHERE username = :username AND password = :password";

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