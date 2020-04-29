<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kelas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_kelas');
	}

	public function Data_kelas()
	{
		if ($this->session->userdata('level') == 'admin') {
			$data['kelas'] = $this->M_kelas->data_kelas();
			$this->load->view('admin/admin');
			$this->load->view('admin/data_kelas/get_kelas', $data);
		}else{
			redirect('c_login');
		}
	}

	public function Tambah_Kelas()
	{
		if ($this->session->userdata('level') == 'admin') {
			$this->load->view('admin/admin');
			$this->load->view('admin/data_kelas/tambah_data');
		}else{
			redirect('c_login');
		}
	}

	public function Proses_Tambah()
	{
		$kelas = $this->input->post('kelas', true);
		$kompetensi = $this->input->post('kompetensi', true);

		$cek = $this->db->get_where('kelas', array('nama_kelas' => $kelas, 'kompetensi_keahlian' => $kompetensi))->row();
		if ($hasil > 0) {
			echo 'Data yang anda masukan sudah ada';
		}else{
			$data = array('nama_kelas' => $kelas,
							'kompetensi_keahlian' => $kompetensi);
			$tambah = $this->db->insert('kelas', $data);

			if ($tambah) {
				redirect('c_kelas/Data_Kelas');
			}else{
				echo 'Gagal Tambah Data';
			}
		}
	}

	public function Edit_Kelas($id_kelas)
	{
		if ($this->session->userdata('level') == 'admin') {
			$data['kelas'] = $this->M_kelas->edit_kelas($id_kelas);
			$this->load->view('admin/admin');
			$this->load->view('admin/data_kelas/edit_data', $data);
		}else{
			redirect('c_login');
		}
	}

	public function Proses_Edit($id_kelas)
	{
		$kelas = $this->input->post('kelas', true);
		$kompetensi = $this->input->post('kompetensi', true);

		$data = array('nama_kelas' => $kelas, 'kompetensi_keahlian'=> $kompetensi );
		$edit = $this->M_kelas->proses_edit($id_kelas, $data);
		if ($edit) {
			redirect('c_kelas/Data_Kelas');
		}else{
			echo 'Gagal edit data';
		}
	}

	public function Hapus_Kelas($id_kelas)
	{
		$hapus = $this->M_kelas->hapus_kelas($id_kelas);

		if ($hapus) {
			redirect('c_kelas/Data_Kelas');
		}else{
			echo 'Gagal Hapus Data';
		}
	}
}