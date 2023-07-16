<?php

class Dashboard extends Controller {
    public function index($data=[])
    {
        $data['title'] = 'Dashboard';
        $this->view('templates/users/header', $data);
        $this->view('dashboard/users', $data);
        $this->view('templates/users/footer');
    }
}