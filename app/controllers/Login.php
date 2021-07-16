<?php

class Login extends Controller {
    public function index() {
        $data['title'] = 'Login | Olshop.io';
        $this->view('login/login', $data);
    }

    public function prosesLogin() {
        if($row = $this->model('LoginModel')->checkLogin($_POST) > 0 ) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['session_login'] = 'sudah_login';

            header('location: '. base_url . '/home');
		} 
        else {
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	}
    
    public function register() {
        $data['title'] = 'Register | Olshop.io';
        $this->view('login/register', $data);
    }

    public function forgot_password() {
        $data['title'] = 'Forgot Password | Olshop.io';
        $this->view('login/forgot-password', $data);
    }
}