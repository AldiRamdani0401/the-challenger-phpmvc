<?php

class Register extends Controller {
    public function index()
    {
        $data['title'] = 'Register';

        $this->view('templates/users/header', $data);
        $this->view('register/index');
        $this->view('templates/users/footer');
    }
}