<?php

class Leaderboard extends Controller {
    public function index()
    {
        $data['title'] = 'Leaderboard';

        $this->view('templates/users/header', $data);
        $this->view('leaderboard/index');
        $this->view('templates/users/footer');
    }
}