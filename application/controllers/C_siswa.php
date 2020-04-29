<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_siswa');
	}

	public function Data_Siswa()
	{
		if ($this->session->userdata('level') == 'admin') {
			$nis = $this->input->post('nis', true);
			$nama = $this->input->post('nama', true);
			$kelas = $this->input->post('kelas', true);
			$kompetensi_keahlian = $this->input->post('kompetensi_keahlian', true);
			$spp = $this->input->post('spp', true);
			$alamat = $this->input->post('alamat', true);

			$data_filter = array('siswa.nis' => $nis,
								 'siswa.nama' => $nama,
								 'siswa.id_kelas' => $kelas,
								 'siswa.id_spp' => $spp,
								 'kelas.kompetensi_keahlian' => $kompetensi_keahlian,
								 'siswa.alamat' => $alamat);

			$data['siswa'] = $this->m_siswa->data_siswa($data_filter);
			$data['spp'] = $this->db->get('spp')->result_array();
			$this->load->view('admin/admin');
			$this->load->view('admin/data_siswa/get_siswa', $data);
		}else{
			redirect('c_login');
		}
	}

	public function Tambah_Siswa()
	{
		if ($this->session->userdata('level') == 'admin') {
			$data['kelas'] = $this->db->get('kelas')->result_array();
			$this->load->view('admin/admin');
			$this->load->view('admin/data_siswa/tambah_siswa', $data);
		}else{
			redirect('c_login');
		}
	}

	public function Proses_Tambah()
	{
		$nisn = $this->input->post('nisn', true);
		$nis = $this->input->post('nis', true);
		$nama = $this->input->post('nama', true);
		$kelas = $this->input->post('kelas', true);
		$no_telp = $this->input->post('no_telp', true);
		$alamat = $this->input->post('alamat', true);
		$id_spp = $this->input->post('id_spp', true);

		$cek = $this->db->get_where('siswa', array('nisn' => $nisn))->row();
		if ($nisn == $cek->nisn) {
			echo 'NISN sudah ada';
		}else{
			$data = array('nisn' => $nisn,
						  'nis' => $nis,
						  'nama' => $nama,
						  'id_kelas' => $kelas,
						  'no_telp' => $no_telp,
						  'alamat' => $alamat,
						  'id_spp' => $id_spp );

			$tambah = $this->db->insert('siswa', $data);
			if ($tambah) {
				redirect('c_siswa/Data_Siswa');
			}else{
				echo 'Gagal Tambah Data';
			}
		}
	}

	public function Edit_Siswa($nisn)
	{
		if ($this->session->userdata('level') == 'petugas') {
			redirect('c_login');
		}elseif ($this->session->userdata('level') == 'admin') {
			$data['siswa'] = $this->m_siswa->edit_siswa($nisn);
			$this->load->view('admin/admin');
			$this->load->view('admin/data_siswa/edit_siswa', $data);
		}else{
			redirect('c_login');
		}
	}

	public function Proses_Edit(){
		$nisn = $this->input->post('nisn', true);
		$nis = $this->input->post('nis', true);
		$nama = $this->input->post('nama', true);
		$kelas = $this->input->post('kelas', true);
		$no_telp = $this->input->post('no_telp', true);
		$alamat = $this->input->post('alamat', true);

		$data = array('nisn' => $nisn,
					  'nis' => $nis,
					  'nama' => $nama,
					  'id_kelas' => $kelas,
					  'no_telp' => $no_telp,
					  'alamat' => $alamat );

		$edit = $this->m_siswa->proses_edit($nisn, $data);
		if ($edit) {
			redirect('c_siswa/Data_Siswa');
		}else{
			echo 'Gagal Edit';
		}
	}

	public function Hapus_Siswa($nisn)
	{
		$hapus = $this->m_siswa->hapus_siswa($nisn);

		if ($hapus) {
			redirect('c_siswa/Data_Siswa');
		}else{
			echo 'Gagal Hapus Data';
		}
	}
}