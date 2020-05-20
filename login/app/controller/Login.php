<?php
class Login extends Controllers
{
    public function index()
    {
        $this->view('login/index');
    }

    public function prosesLogin()
    {
        $user = $this->model('Login_model')->loginUser($_POST);
        $petugas = $this->model('Login_model')->loginPetugas($_POST);
        // var_dump($user);
        // var_dump($petugas);die;
        if ($user != null) {
            $_SESSION['login'] = 'user';
            header('location:' . BASEURL . '/home/index');
        } elseif ($petugas != null) {
            if ($petugas['level'] == 'admin') {
                $_SESSION['login'] = 'admin';
                header('location:' . BASEURL . '/admin');
            } elseif ($petugas['level'] == 'operator') {
                $_SESSION['login'] = 'operator';
                header('location:' . BASEURL . '/operator');
            }
        } else {
            $_SESSION['login'] = 'gagal';
            header('location:' . BASEURL);
        }
    }
}
