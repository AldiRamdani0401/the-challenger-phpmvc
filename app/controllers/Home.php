<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Home';
        $this->view('templates/users/header', $data);
        $this->view('home/index');
        $this->view('templates/users/footer');
    }
}