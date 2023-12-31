<?php

class Gameplay_model extends Controller
{
    private $table_users = "tb_users";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function setPoint($playerScore, $data)
    {
        $user_id = $data['user'][0]['user_id'];

        // Ambil oldPoint dari database
        $query = "SELECT points FROM " . $this->table_users . " WHERE user_id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $user_id);
        $this->db->execute();
        $result = $this->db->single();
        $oldPoint = $result['points'];

        // Hitung total point baru
        $point = intval($oldPoint) + intval($playerScore);

        // Update points ke database
        $query = "UPDATE " . $this->table_users . " SET points = :points WHERE user_id = :id";

        $this->db->query($query);
        $this->db->bind(':points', $point);
        $this->db->bind(':id', $user_id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function setRank($playerScore)
    {

    }
}