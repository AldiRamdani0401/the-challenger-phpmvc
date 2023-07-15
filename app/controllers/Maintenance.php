<?php

class Maintenance extends Controller {
    public function index()
    {
        $data['title'] = 'Coming soon..';

        $this->view('templates/users/header', $data);
        $this->view('maintenance/comingsoon');
        $this->view('templates/users/footer');
    }
}