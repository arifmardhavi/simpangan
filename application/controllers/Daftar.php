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
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$konfirmasi_password = $this->input->post('konfirmasi_password');
		$emailSplit = explode('@', $email);
		$studentUPN = 'student.upnjatim.ac.id';
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		$rand = substr(str_shuffle($permitted_chars), 0, 6);
		$data = array(
			'nama' => $nama,
			'no_induk' => $npm,
			'email' => $email,
			'password' => md5($password),
			'status' => 3
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
							// $this->session->set_userdata('email',$email);
							$this->session->set_flashdata('success_registration', 'Berhasil mendaftar, Silahkan login.');
							redirect('login');
							// $subject = "KODE VERIFIKASI SIMPANGAN IF UPNVJT";
							// $message = "Kode verifikasi anda adalah <br> <b style='font-size:40px'> $rand </b>";
							// // if ($this->send_email->send_email($email,$subject,$message) == 0) {
							// $sendemail = $this->send_email->sending($email,$subject,$message);
							// if ($sendemail) {
							// 	redirect('daftar/verifikasi');
							// }else{
							// 	echo $sendemail;
							// $msg = 'Silahkan cek email anda untuk mendapatkan kode verifikasi!';
							// }

						}else{
							$this->session->set_flashdata('danger_registration', 'Gagal Mendaftar!');
							redirect('daftar');
						}
					}
				}else{
					$this->session->set_flashdata('danger_registration', 'Gagal Mendaftar, password harus sama!');
					redirect('daftar');
				}
			}else{
				$this->session->set_flashdata('danger_registration', 'email tidak  sesuai dengan npm yang di inputkan');
				redirect('daftar');
			}
		}else{
			$this->session->set_flashdata('danger_registration', 'Wajib menggunakan email kampus');
			redirect('daftar');
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


































