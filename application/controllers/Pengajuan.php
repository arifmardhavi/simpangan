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

	private $_Tkelompok = 'kelompok';

	public function index()
	{
		$data['page'] = 'pengajuan';
		$this->load->view('ajuan',$data);
	}

	public function daftar()
	{
		$no_induk = $this->session->userdata('no_induk');
		if($this->crud->read('kelompok', array('npm1' => $no_induk))) {
			redirect('pengajuan');
			exit();
		}
		$data['page'] = 'pengajuan';
		$this->load->view('pengajuan',$data);
	}

	public function create()
	{
		$npm1 = $this->input->post('npm1');
		$nama1 = $this->input->post('nama1');
		$npm2 = $this->input->post('npm2');
		$nama2 = $this->input->post('nama2');
		$npm3 = $this->input->post('npm3');
		$nama3 = $this->input->post('nama3');
		$judul_pkl = $this->input->post('judul_pkl');
		$tempat_pkl = $this->input->post('tempat_pkl');
		$mulai_pkl = $this->input->post('mulai_pkl');
		$selesai_pkl = $this->input->post('selesai_pkl');
		$pkl_terdahulu = $this->input->post('pkl_terdahulu');
		$pembimbing_terdahulu = $this->input->post('pembimbing_terdahulu');
		$tempat_terdahulu = $this->input->post('tempat_terdahulu');
		$usulan_pkl = $this->input->post('usulan_pkl');
		$transkrip_pkl = $this->input->post('transkrip_pkl');
		$surat_balasan = $this->input->post('surat_balasan');

		if($this->crud->read('kelompok', array('npm1' => $npm1)) == FALSE) {
			if($this->crud->read('kelompok', array('npm2' => $npm1)) == FALSE ) {
				if($this->crud->read('kelompok', array('npm3' => $npm1)) == FALSE) {
					if($this->crud->read('kelompok', array('npm1' => $npm2)) == FALSE) {
						if($this->crud->read('kelompok', array('npm2' => $npm2)) == FALSE ) {
							if($this->crud->read('kelompok', array('npm3' => $npm2)) == FALSE) {
								if($this->crud->read('kelompok', array('npm1' => $npm3)) == FALSE) {
									if($this->crud->read('kelompok', array('npm2' => $npm3)) == FALSE ) {
										if($this->crud->read('kelompok', array('npm3' => $npm3)) == FALSE) {
											$data = array (
												'npm1' => $npm1,
												'nama1' => $nama1,
												'npm2' => $npm2,
												'nama2' => $nama2,
												'npm3' => $npm3,
												'nama3' => $nama3,
												'judul_pkl' => $judul_pkl,
												'tempat_pkl' => $tempat_pkl,
												'mulai_pkl' => $mulai_pkl,
												'selesai_pkl' => $selesai_pkl,
												'pkl_terdahulu' => $pkl_terdahulu,
												'pembimbing_terdahulu' => $pembimbing_terdahulu,
												'tempat_terdahulu' => $tempat_terdahulu,
												'usulan_pkl' => $usulan_pkl,
												'transkrip_pkl' => $transkrip_pkl,
												'surat_balasan' => $surat_balasan
											);

											if ($this->crud->create($this->_Tkelompok,$data)) {
												$this->session->set_flashdata('success_kelompok', 'Pengajuan Berhasil');
												redirect('pengajuan');
											}else{
												$this->session->set_flashdata('danger_kelompok', 'Pengajuan Gagal');
												redirect('pengajuan');
											}
										}else{
											$this->session->set_flashdata('danger_kelompok', 'anggota telah berada di kelompok lain');
											redirect('pengajuan');
										}
									}else{
										$this->session->set_flashdata('danger_kelompok', 'anggota telah berada di kelompok lain');
										redirect('pengajuan');
									}
								}else{
									$this->session->set_flashdata('danger_kelompok', 'anggota telah berada di kelompok lain');
									redirect('pengajuan');
								}
							}else{
								$this->session->set_flashdata('danger_kelompok', 'anggota telah berada di kelompok lain');
								redirect('pengajuan');
							}
						}else{
							$this->session->set_flashdata('danger_kelompok', 'anggota telah berada di kelompok lain');
							redirect('pengajuan');
						}
					}else{
						$this->session->set_flashdata('danger_kelompok', 'anggota telah berada di kelompok lain');
						redirect('pengajuan');
					}
				}else{
					$this->session->set_flashdata('danger_kelompok', 'anggota telah berada di kelompok lain');
					redirect('pengajuan');
				}
			}else{
				$this->session->set_flashdata('danger_kelompok', 'anggota telah berada di kelompok lain');
				redirect('pengajuan');
			}
		}else{
			$this->session->set_flashdata('danger_kelompok', 'anggota telah berada di kelompok lain');
			redirect('pengajuan');
		}

	}
}
