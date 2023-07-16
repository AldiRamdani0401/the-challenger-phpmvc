<?php

class Admin extends Controller {
    public function index($data=[])
    {
        $data['title'] = 'Admin';
        $this->view('templates/admin/header', $data);
        $this->view('admin/dashboard/index', $data);
        $this->view('templates/admin/footer');
    }
    public function myTasks()
    {
        $data['title'] = 'MyTasks';
        $this->view('templates/admin/header', $data);
        $this->view('admin/mytasks/index');
        $this->view('templates/admin/footer');
    }

    public function setBattle()
    {
        $data['title'] = 'SetBattle';
        $this->view('templates/admin/header', $data);
        $this->view('admin/setbattle/index', $data);
        $this->view('templates/admin/footer');
    }

    public function settings()
    {
        $data['title'] = 'Settings';
        $this->view('templates/admin/header', $data);
        $this->view('admin/settings/index');
        $this->view('templates/admin/footer');
    }

}