<?php

class Auth extends Controller {
    public function index(){
        $this->view('home/index');
    }
    public function login(){
        $this->view('auth/login');
    }

    public function login_process()
{
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ambil user dari database berdasarkan username
    $user = $this->Model('User_model')->getByUsername($username);

    // Jika user ditemukan dan password benar
    if ($user && password_verify($password, $user['password'])) {
        // Mulai sesi
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Redirect berdasarkan role
        if ($user['role'] == 'admin') {
            header('Location: ' . BASEURL . '/admin/index.php');
        } else {
            header('Location: ' . BASEURL);
        }
    } else {
        // Jika login gagal
        echo "Invalid login credentials.";
    }
}


    public function register(){
        $this->view('auth/register');
    }

    public function register_process()
    {
        if($this->Model('User_model')-> insert($_POST)>0){
            header('Location: ' . BASEURL . '/auth/login');
            exit;
        }
        
    }
    
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: ../public/index.php');
        exit;
    }
    
}