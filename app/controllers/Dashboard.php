<?php

class Dashboard extends Controller {
    public function index()
    {
        $username = $_SESSION['username'];

        $namaUser = ['username' => $username];

        $data['title'] = 'Dashboard';
        $data['user'] = $this->model('Users_model')->getDataUserByName($namaUser);

        $this->view('templates/users/header', $data);
        $this->view('dashboard/users', $data, $username);
        $this->view('templates/users/footer');
    }
}