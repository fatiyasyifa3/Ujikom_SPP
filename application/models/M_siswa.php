<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function data_siswa($data_filter)
	{
		$this->db->like($data_filter);
		$this->db->order_by('nama', 'asc');
		$this->db->select('*');
		$this->db->from('kelas','spp');
		$this->db->join('siswa','siswa.id_kelas = kelas.id_kelas');
		$this->db->join('spp','spp.id_spp = siswa.id_spp');
		return $this->db->get()->result_array();
	}

	public function edit_siswa($nisn)
	{
		$this->db->select('*');
		$this->db->where('siswa.nisn', $nisn);
		$this->db->from('siswa');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		return $this->db->get()->row();
	}

	public function proses_edit($nisn, $data)
	{
		$this->db->where('nisn', $nisn);
		return $this->db->update('siswa', $data);
	}

	public function hapus_siswa($nisn)
	{
		$this->db->where('nisn', $nisn);
		return $this->db->delete('siswa');
	}
}