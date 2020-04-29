<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {	

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	public function index()
	{
		$this->load->view('Login');
	}

	public function Proses_Login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$cek = $this->M_login->Proses_Login($username,$password);
		$hasil = count($cek);

		if ($hasil<1) {
			redirect('C_login');
		}else{
			if ($cek->level == 'admin') {
				$data_session = array(
									'id_petugas' => $cek->id_petugas,
									'username' => $cek->username,
									'nama_petugas' => $cek->nama_petugas,
									'level' => $cek->level 
								);
				$this->session->set_userdata($data_session);
				redirect('petugas/admin');
			}else{
				$data_session = array(
									'id_petugas' => $cek->id_petugas,
									'username' => $cek->username,
									'nama_petugas' => $cek->nama_petugas,
									'level' => $cek->level
								);
				$this->session->set_userdata($data_session);
				redirect('petugas/petugas_home');
			}
		}
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('C_login');
	}

	public function Profile()
	{
		if ($this->session->userdata('level') == 'petugas') {

			$this->load->view('petugas');
			$this->load->view('profile/profile_petugas');
		}elseif ($this->session->userdata('level') == 'admin') {

			$this->load->view('admin/admin');
			$this->load->view('profile/profile_petugas');
		}else{
			redirect('c_login');
		}
		
	}
}