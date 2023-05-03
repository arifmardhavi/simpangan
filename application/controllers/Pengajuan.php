<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_crud', 'crud');

		if (empty($this->session->userdata('id_user'))) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['page'] = 'pengajuan';
		$this->load->view('pengajuan',$data);
	}
}
