<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model {

	public function data_petugas($data_filter)
	{
		$this->db->like($data_filter);
		return $this->db->get('petugas')->result_array();
	}

	public function edit_petugas($id_petugas)
	{
		$this->db->where('id_petugas', $id_petugas);
		return $this->db->get('petugas')->row();
	}

	public function proses_edit($id_petugas, $data)
	{
		$this->db->where('id_petugas', $id_petugas);
		return $this->db->update('petugas', $data);
	}

	public function hapus_petugas($id_petugas)
	{
		$this->db->where('id_petugas', $id_petugas);
		return $this->db->delete('petugas');
	}
}