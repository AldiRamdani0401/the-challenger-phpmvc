<?php

class SuperAdmin extends Controller {
    public function index()
    {
        $data['title'] = 'SuperAdmin';
        $this->view('templates/superadmin/header',$data);
        $this->view('superadmin/dashboard/index');
        $this->view('templates/superadmin/footer');
    }

    public function taskManager()
    {
        $data['title'] = 'TaskManager';
        $this->view('templates/superadmin/header', $data);
        $this->view('superadmin/taskmanager/index');
        $this->view('templates/superadmin/footer');
    }

    public function reports()
    {
        $data['title'] = 'Reports';
        $this->view('templates/superadmin/header', $data);
        $this->view('superadmin/reports/index');
        $this->view('templates/superadmin/footer');
    }

    public function settings()
    {
        $data['title'] = 'Settings';
        $this->view('templates/superadmin/header', $data);
        $this->view('superadmin/settings/index');
        $this->view('templates/superadmin/footer');
    }
}