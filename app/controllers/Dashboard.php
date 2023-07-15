<?php

class Dashboard extends Controller {
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->view('templates/users/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/users/footer');
    }
}