<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	public function data_kelas()
	{
		return $this->db->get('kelas')->result_array();
	}

	public function edit_kelas($id_kelas)
	{
		$this->db->where('id_kelas', $id_kelas);
		return $this->db->get('kelas')->row();
	}

	public function proses_edit($id_kelas, $data)
	{
		$this->db->where('id_kelas', $id_kelas);
		return $this->db->update('kelas', $data);
	}

	public function hapus_kelas($id_kelas)
	{
		$this->db->where('id_kelas', $id_kelas);
		return $this->db->delete('kelas');
	}
}