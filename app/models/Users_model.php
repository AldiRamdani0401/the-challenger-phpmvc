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

    public function upload()
    {
        $namaFile = $_FILES['photo']['name'];
        $ukuranFile = $_FILES['photo']['size'];
        $error = $_FILES['photo']['error'];
        $tmpName = $_FILES['photo']['tmp_name'];

        // cek apakah ada photo yang diupload
        if ($error === 4){
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiPhotoValid = ['jpg', 'jpeg', 'png'];
        $ekstensiPhoto = explode('.', $namaFile);
        $ekstensiPhoto = strtolower(end($ekstensiPhoto));
        if( !in_array($ekstensiPhoto, $ekstensiPhotoValid) )
        {
            return false;
        }

        // cek jika ukurannya telalu besar
        if($ukuranFile > 2000000){
            return false;
        }

        // generate nama photo

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiPhoto;

        // akhir pengecekkan, photo akan di upload
        move_uploaded_file($tmpName, 'app/src/images/' .$namaFileBaru);

        return $namaFileBaru;
    }

    public function createUser($data)
    {
        if (!preg_match("/^[a-zA-Z\s]+$/", $data['nama_lengkap'])){
            return 0;
        }

        if ($data['password'] !== $data['confPassword']){
            return 0;
        }

        $check = "SELECT username FROM ".$this->table_users." WHERE username = :username";
        $this->db->query($check);
        $this->db->bind(':username', $data['username']);
        $this->db->execute();
        $result = $this->db->rowCount();

        if ($result > 0){
            return 0;
        } else {
            $query = "INSERT INTO ".$this->table_users." (nama_lengkap, username, email, password, confPassword, photo) VALUES (:nama_lengkap, :username, :email, :password, :confPassword, :photo) ";
            $this->db->query($query);
            $this->db->bind(':nama_lengkap', $data['nama_lengkap']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':confPassword', $data['confPassword']);

            // upload photo
            $photo = $this->upload();

            if(!$photo){
                return 0;
            }

            $this->db->bind(':photo', $photo);

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
        // $query = "SELECT photo FROM ".$this->table_users." WHERE user_id = :id";
        // $this->db->query($query);
        // $this->db->bind(':id', $data['id']);
        // $this->db->execute();

        // $result = $this->db->single();

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