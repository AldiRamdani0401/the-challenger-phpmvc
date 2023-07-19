<?php
class Settings extends Controller
{
    public function userSettings()
    {
        $username = $_SESSION['username'];
        $namaUser = ['username' => $username];

        $data['title'] = 'Settings';
        $data['user'] = $this->model('Users_model')->getDataUserByName($namaUser);

        $this->view('templates/users/header', $data);
        $this->view('settings/users/index', $data);
        $this->view('templates/users/footer');
    }

    public function editUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $namaLengkap = $_POST['nama_lengkap'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confPassword = $_POST['confPassword'];

            $data = [
                'id' => $id,
                'namaLengkap' => $namaLengkap,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'confPassword' => $confPassword
            ];

            $usersModel = $this->model('Users_model');
            $result = $usersModel->editUser($data);

            if ($result !== false) {
                Flasher::setFlash("Update Data Berhasil", "", "success");
            } else {
                Flasher::setFlash("Update Data Gagal", "", "danger");
            }

            header('Location: ' . BASEURL . '/settings/userSettings');
            exit;
        }
    }
}
