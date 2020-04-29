<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_spp extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_spp');
	}

	public function Data_SPP()
	{
		if ($this->session->userdata('level') == 'admin') {
			$data['spp'] = $this->M_spp->data_spp();
			$this->load->view('admin/admin');
			$this->load->view('admin/data_spp/get_spp', $data);
		}else{
			redirect('c_login');
		}
	}

	public function Tambah_SPP()
	{
		if ($this->session->userdata('level') == 'admin') {
			$this->load->view('admin/admin');
			$this->load->view('admin/data_spp/tambah_data');
		}else{
			redirect('c_login');
		}
	}

	public function Proses_Tambah()
	{
		$tahun = $this->input->post('tahun', true);
		$nominal = $this->input->post('nominal', true);

		$cek = $this->db->get_where('spp', array('tahun' => $tahun))->row();
		$hasil = count($cek);

		if ($hasil > 0) {
			echo 'Tahun yang anda masukan sudah ada!';
		}else{
			$data = array('tahun' => $tahun,
							'nominal' => $nominal);
			$tambah = $this->db->insert('spp', $data);

			if ($tambah) {
				redirect('c_spp/Data_SPP');
			}else{
				echo 'Gagal Tambah Data';
			}
		}
	}

	public function Edit_SPP($id_spp)
	{
		if ($this->session->userdata('level') == 'admin') {
			$data['spp'] = $this->M_spp->edit_spp($id_spp);
			$this->load->view('admin/admin');
			$this->load->view('admin/data_spp/edit_data', $data);
		}else{
			redirect('c_login');
		}
	}

	public function Proses_Edit($id_spp)
	{
		$tahun = $this->input->post('tahun', true);
		$nominal = $this->input->post('nominal', true);

		$data = array('tahun' => $tahun, 'nominal'=> $nominal );
		$edit = $this->M_spp->proses_edit($id_spp, $data);
		if ($edit) {
			redirect('c_spp/Data_SPP');
		}else{
			echo 'Gagal edit data';
		}
	}

	public function Hapus_Kelas($id_spp)
	{
		$hapus = $this->M_spp->hapus_spp($id_spp);

		if ($hapus) {
			redirect('c_spp/Data_SPP');
		}else{
			echo 'Gagal Hapus Data';
		}
	}
}