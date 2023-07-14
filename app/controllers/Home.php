<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Home';
        $this->view('templates/components/users/header', $data);
        $this->view('home/index');
        $this->view('templates/components/users/footer');
    }
}