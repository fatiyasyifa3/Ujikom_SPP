<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_spp extends CI_Model {

	public function data_spp()
	{
		return $this->db->get('spp')->result_array();
	}

	public function edit_spp($id_spp)
	{
		$this->db->where('id_spp', $id_spp);
		return $this->db->get('spp')->row();
	}

	public function proses_edit($id_spp, $data)
	{
		$this->db->where('id_spp', $id_spp);
		return $this->db->update('spp', $data);
	}

	public function hapus_spp($id_spp)
	{
		$this->db->where('id_spp', $id_spp);
		return $this->db->delete('spp');
	}
}