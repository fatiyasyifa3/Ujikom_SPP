<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	
	public function Proses_Login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('petugas')->row();
	}

	public function profile($nis){
        $this->db->where('siswa.nis', $nis);
        $this->db->from('kelas');
        $this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
        return $this->db->get()->row();
        
    }

}