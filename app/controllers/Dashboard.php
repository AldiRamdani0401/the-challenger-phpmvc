<?php

class Dashboard extends Controller {
    public function index()
    {
        $username = $_SESSION['username'];

        $data['title'] = 'Dashboard';
        $this->view('templates/users/header', $data);
        $this->view('dashboard/users', $data, $username);
        $this->view('templates/users/footer');
    }
}