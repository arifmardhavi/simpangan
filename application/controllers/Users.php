<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_crud', 'crud');

		if (empty($this->session->userdata('id_user'))) {
			redirect('login');
		}
	}
	private $_Tusers = 'users';

	public function dosen()
	{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$status = 2;

		$data = array(
			'no_induk' => $nip,
			'nama' => $nama,
			'email' => $email,
			'password' => md5($password),
			'status' => $status
		);

		if ($this->crud->create($this->_Tusers,$data)) {
			$this->session->set_flashdata('success_dosen', 'data dosen berhasil ditambahkan');
			redirect('dosen');
		}else{
			$this->session->set_flashdata('danger_dosen', 'Gagal menambahkan data dosen baru');
			redirect('dosen');
		}
	}

	public function delete_dosen($id_user)
	{
		if ($this->crud->delete($this->_Tusers,array('id_user' => $id_user))) {
			$this->session->set_flashdata('success_dosen', "Data berhasil dihapus!");
		}else{
			$this->session->set_flashdata('danger_dosen', "Data gagal terhapus!");
		}

		redirect('dosen');

	}
}





























