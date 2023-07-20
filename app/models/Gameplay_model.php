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

        $query = "UPDATE ".$this->table_users." SET points = :points WHERE user_id = :id ";

        $this->db->query($query);
        $this->db->bind(':points', $playerScore);
        $this->db->bind(':id', $user_id);
        $this->db->execute();

        return $this->db->rowCount();
    }

}