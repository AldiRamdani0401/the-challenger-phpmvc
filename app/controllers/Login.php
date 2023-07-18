<?php

class Login extends Controller {
    public function index()
    {
        $data['title'] = 'Login';

        $this->view('templates/users/header', $data);
        $this->view('login/index');
        $this->view('templates/users/footer');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($this->model('Users_model')->loginUser($_POST) > 0) {
            Flasher::setFlash("Selamat Datang, $username", '', 'success');

            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            header("Location: ".BASEURL."/dashboard");
            exit;
        } elseif ($this->model('Admin_model')->loginAdmin($_POST) > 0) {
            Flasher::setFlash("Selamat Datang, $username", '', 'success');

            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            header('Location: ' .BASEURL. '/admin');
            exit;
        } elseif ($username === 'superadmin' && $password === 'superadmin') {
            $this->view('login/loginSuperAdmin');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'Login', 'danger');
            header('Location: '. BASEURL . '/login');
            exit;
        }
    }


    public function loginSuperAdmin()
    {
        $username = $_POST['username'];

        if ($this->model('SuperAdmin_model')->loginSuperAdmin($_POST) > 0)
        {
            Flasher::setFlash("Selamat Datang, $username", '', 'success');

            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            header("Location: ".BASEURL."/superadmin/dashboard");
            exit;
        }
    }
}