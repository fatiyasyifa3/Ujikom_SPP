<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function proses_login($nis, $password)
	{
		$this->db->where('nis', $nis);
		$this->db->where('password', $password);
		return $this->db->get('siswa')->row();
	}

	public function Home($nisn){

		$this->db->where('nisn', $nisn);
		return $this->db->get('pembayaran')->result_array();
	}
	
	public function data_pembayaran_spp($nisn, $bulan, $tahun){
		$this->db->where('nisn', $nisn);
		$this->db->where('bulan_bayar', $bulan);
		$this->db->where('tahun_bayar', $tahun);
		return $this->db->get('pembayaran')->row();
	}

	public function profile($nis){
        $this->db->where('siswa.nis', $nis);
        $this->db->from('kelas');
        $this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
        return $this->db->get()->row();
        
    }

}