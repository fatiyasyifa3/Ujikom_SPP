<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_petugas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_petugas');
	}

	public function Data_Petugas()
	{
		if ($this->session->userdata('level') == 'admin') {
			$nama_petugas = $this->input->post('nama_petugas', true);
			$level = $this->input->post('level', true);

			$data_filter = array('nama_petugas' => $nama_petugas, 'level' => $level);

			$data['petugas'] = $this->M_petugas->data_petugas($data_filter);
			$this->load->view('admin/admin');
			$this->load->view('admin/data_petugas/get_petugas', $data);
		}else{
			redirect('c_login');
		}
	}

	public function Tambah_Petugas()
	{
		if ($this->session->userdata('level') == 'admin') {
			$this->load->view('admin/admin');
			$this->load->view('admin/data_petugas/tambah_data');
		}else{
			redirect('c_login');
		}
	}

	public function Proses_Tambah()
	{
		$nama = $this->input->post('nama', true);
		$level = $this->input->post('level', true);
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$data = array('nama_petugas' => $nama ,
						'level' => $level,
						'username' => $username,
						'password' => $password );
		$tambah = $this->db->insert('petugas', $data);

		if ($tambah) {
			redirect('C_petugas/Data_Petugas');
		}else{
			echo 'Gagal Tambah Data';
		}
	}

	public function Edit_Petugas($id_petugas)
	{
		if ($this->session->userdata('level') == 'admin') {
			$data['petugas'] = $this->M_petugas->edit_petugas($id_petugas);
			$this->load->view('admin/admin');
			$this->load->view('admin/data_petugas/edit_data', $data);
		}else{
			redirect('c_login');
		}
	}

	public function Proses_Edit($id_petugas)
	{
		$nama = $this->input->post('nama', true);
		$level = $this->input->post('level', true);
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$data = array('nama_petugas' => $nama ,
						'level' => $level,
						'username' => $username,
						'password' => $password );
		$edit = $this->M_petugas->proses_edit($id_petugas, $data);
		if ($edit) {
			redirect('C_petugas/Data_Petugas');
		}else{
			echo 'Gagal edit data';
		}
	}

	public function Hapus_Petugas($id_petugas)
	{
		$hapus = $this->M_petugas->hapus_petugas($id_petugas);

		if ($hapus) {
			redirect('C_petugas/Data_Petugas');
		}else{
			echo 'Gagal Hapus Data';
		}
	}
}