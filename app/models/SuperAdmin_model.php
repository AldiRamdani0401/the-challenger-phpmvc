<?php

class SuperAdmin_model {
    private $table_superAdmin = "tb_superadmin";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function loginSuperAdmin($data)
    {
        $check = "SELECT username, password1, password2 FROM " .$this->table_superAdmin. " WHERE username = :username AND (password1 = :password1 AND password2 = :password2) ";

        $this->db->query($check);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password1', $data['password1']);
        $this->db->bind(':password2', $data['password2']);
        $this->db->execute();

        $result = $this->db->rowCount();

        if($result > 0){
            return true;
        } else {
            return false;
        }
    }
}