<?php

class Battle extends Controller {
    public function index()
    {
        $username = $_SESSION['username'];
        $namaUser = ['username' => $username];

        $data['title'] = 'Battle';
        $data['user'] = $this->model('Users_model')->getDataUserByName($namaUser);

        $this->view('templates/users/header', $data);
        $this->view('battle/index', $data, $username);
        $this->view('templates/users/footer');
    }
}