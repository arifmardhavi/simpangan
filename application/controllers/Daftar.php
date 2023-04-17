<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_crud', 'crud');
		$this->load->model('M_send_email','send_email');
	}

	private $_Tusers = 'users';

	public function index()
	{
		$this->load->view('daftar');
	}

	public function auth()
	{
		$npm = $this->input->post('npm');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$konfirmasi_password = $this->input->post('konfirmasi_password');
		$emailSplit = explode('@', $email);
		$studentUPN = 'student.upnjatim.ac.id';
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		$rand = substr(str_shuffle($permitted_chars), 0, 6);
		$data = array(
			'nama' => $email,
			'email' => $email,
			'password' => md5($password),
			'kode' => $rand
		);
		if ($emailSplit[1] == $studentUPN) {
			if ($emailSplit[0] == $npm) {
				if ($password === $konfirmasi_password) {
					$verify = $this->crud->read($this->_Tusers,array('email' => $email));
					if ($verify) {
						$msg = 'Gagal Mendaftar! Email anda sudah terdaftar';
						redirect('daftar/?msg='. $msg);
					}else{
						if ($this->crud->create($this->_Tusers, $data)) {
							$this->session->set_userdata('email',$email);
							$subject = "KODE VERIFIKASI SIMPANGAN IF UPNVJT";
							$message = "Kode verifikasi anda adalah <br> <b style='font-size:40px'> $rand </b>";
							// if ($this->send_email->send_email($email,$subject,$message) == 0) {
							$sendemail = $this->send_email->sending($email,$subject,$message);
							if ($sendemail) {
								redirect('daftar/verifikasi');
							}else{
								echo $sendemail;
							}
							// $msg = 'Silahkan cek email anda untuk mendapatkan kode verifikasi!';

						}else{
							$msg = 'Gagal Mendaftar!';
							redirect('daftar/?msg='. $msg);
						}
					}
				}else{
					$msg = 'Gagal Mendaftar, password harus sama!';
					redirect('daftar/?msg='. $msg);
				}
			}else{
				$msg = 'email tidak  sesuai dengan npm yang di inputkan';
				redirect('daftar/?msg='.$msg);
			}
		}else{
			$msg = 'Wajib menggunakan email kampus';
			redirect('daftar/?msg='.$msg);
		}

	}

	public function verifikasi()
	{
		$this->load->view('verifikasi');
	}

	public function auth_verifikasi()
	{
		// code...
	}
}


































