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
        }else{
            Flasher::setFlash('Gagal', 'Login', 'danger');
            header('Location: '. BASEURL . '/login');
        }
    }
}