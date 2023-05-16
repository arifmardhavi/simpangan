<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_crud', 'crud');
	}

	private $_Tusers = 'users';

	public function index()
	{
		$this->load->view('login');
	}

	public function auth()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$verify = $this->crud->read($this->_Tusers,array('email' => $email));
		if ($verify) {
			if (md5($password) == $verify->password) {
				$this->session->set_userdata('id_user',$verify->id_user);
				$this->session->set_userdata('no_induk',$verify->no_induk);
				$this->session->set_userdata('email',$email);
				redirect('blank');
			}else{
				$msg = 'Gagal Login! password anda salah';
						redirect('login/?msg='. $msg);
			}
		}else{
			$msg = 'Gagal Login! Email belum terdaftar';
			redirect('login/?msg='. $msg);
		}


	}
}
















