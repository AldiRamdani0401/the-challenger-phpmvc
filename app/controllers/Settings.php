<?php

class Settings extends Controller {
    public function userSettings()

    {
        $data['title'] = 'Settings';

        $this->view('templates/users/header',$data);
        $this->view('settings/users/index');
        $this->view('templates/users/footer');
    }
}