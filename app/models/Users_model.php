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

    public function createUser($data)
    {
        if (!preg_match("/^[a-zA-Z\s]+$/", $data['nama_lengkap'])){
            return false;
        }

        if ($data['password'] !== $data['confPassword']){
            return false;
        }

        $check = "SELECT username FROM ".$this->table_users." WHERE username = :username";
        $this->db->query($check);
        $this->db->bind(':username', $data['username']);
        $this->db->execute();
        $result = $this->db->rowCount();

        if ($result > 0){
            return false;
        } else {
            $query = "INSERT INTO ".$this->table_users." (nama_lengkap, username, email, password, confPassword) VALUES (:nama_lengkap, :username, :email, :password, :confPassword) ";
            $this->db->query($query);
            $this->db->bind(':nama_lengkap', $data['nama_lengkap']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':confPassword', $data['confPassword']);
            $this->db->execute();
        }

        return $this->db->rowCount();
    }
}