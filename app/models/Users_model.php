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

    public function getUsers()
    {
        $this->db->query('SELECT * FROM '.$this->table_users);
        return $this->db->resultSet();
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

    public function getDataUserByName($namaUser){
        $getUser = "SELECT * FROM ".$this->table_users." WHERE username = :username ";

        $this->db->query($getUser);
        $this->db->bind(':username', $namaUser['username']);
        $this->db->execute();
        $result = $this->db->single();
        $namaUser = $result['nama_lengkap'];

        if($namaUser){
            $query = "SELECT * FROM ".$this->table_users." WHERE nama_lengkap = :nama_lengkap ";

            $this->db->query($query);
            $this->db->bind(':nama_lengkap', $namaUser);
            $this->db->execute();

             return $this->db->resultSet();
        } else {
            return false;
        }
    }

    public function getDataUserById($data) {
        $query = "SELECT * FROM ".$this->table_users." WHERE user_id = :user_id ";

        $this->db->query($query);
        $this->db->bind(':user_id', $this->$data['user_id']);
        $this->db->execute();

        $dataUser = $this->db->resultSet();
        return $dataUser;
    }

    public function editUser($data)
    {
        // Validasi confPassword tidak boleh kosong
        if (empty($data['confPassword'])) {
            return false;
        }

        $query = "SELECT * FROM ".$this->table_users." WHERE user_id = :id";

        $this->db->query($query);
        $this->db->bind(':id', $data['id']);
        $this->db->execute();

        $result = $this->db->single();
        $existingConfPassword = $result['confPassword'];

        // Validasi confPassword harus sama dengan data yang ada di database
        if ($data['confPassword'] !== $existingConfPassword) {
            return false;
        }

        $query = "UPDATE ".$this->table_users." SET nama_lengkap = :nama_lengkap, email = :email, username = :username, password = :password, confPassword = :confPassword WHERE user_id = :id";

        $this->db->query($query);
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nama_lengkap', $data['namaLengkap']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':confPassword', $data['confPassword']);
        $this->db->execute();

        return $this->db->rowCount();
    }


}