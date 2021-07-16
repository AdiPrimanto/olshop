<?php

class Home extends Controller {
    public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	}

    public function index() {
        $data['title'] = 'Dashboard | Olshop.io';
        $data['mhs'] = $this->model('User_Model')->getUser();

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

}