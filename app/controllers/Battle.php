<?php

class Battle extends Controller {
    public function index()
    {
        $data['title'] = 'Battle';

        $this->view('templates/users/header', $data);
        $this->view('battle/index');
        $this->view('templates/users/footer');
    }
}