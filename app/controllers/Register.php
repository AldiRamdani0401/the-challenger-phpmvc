<?php

class Register extends Controller {
    public function index()
    {
        $data['title'] = 'Register';

        $this->view('templates/users/header', $data);
        $this->view('register/index');
        $this->view('templates/users/footer');
    }

    public function signUp()
    {
        if( $this->model('Users_model')->createUser($_POST) > 0 )
        {
            Flasher::setFlash('Berhasil', 'Registerasi', 'success');
            header('Location: '.BASEURL.'/login');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Registrasi, pastikan mengisi data dengan benar', 'danger');
            header('Location: '.BASEURL.'/register');
            exit;
        }
    }
}