<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPembayaran extends CI_Model{

	public function joinTable($dataCari){
		
		$this->db->like($dataCari);
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
		return $this->db->get()->result_array();
	}

	public function dataPembayaran($bulan, $tahun, $nisn){
			
	 	$this->db->where('nisn', $nisn);
	 	$this->db->where('bulan_bayar', $bulan);
	 	$this->db->where('tahun_bayar', $tahun);
	 	return $this->db->get('pembayaran')->row();
	 }

	public function dataPembayaranStatus($bulan, $tahun, $nisn, $status){
		
	 	$this->db->where('nisn', $nisn);
	 	$this->db->where('bulan_bayar', $bulan);
	 	$this->db->where('tahun_bayar', $tahun);
	 	return $this->db->get('pembayaran')->row();
	 }

	public function cariDataSiswa($nis){
		
		$this->db->where('siswa.nis', $nis);
		$this->db->select('*');
		$this->db->from('kelas', 'spp');
		$this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
		$this->db->join('spp', 'spp.id_spp = siswa.id_spp');
		return $this->db->get('')->row();
	}

	//Pembayaran
	public function hitungPembayaran($nisn, $id_spp){

	 	$this->db->where('nisn', $nisn);
	 	$this->db->where('tahun_bayar', $id_spp);
	 	return $this->db->get('pembayaran')->num_rows();	
	 }

	 public function updateSiswa($nisn, $dataUpdate){
	 	
	 	$this->db->where('nisn', $nisn);
	 	return $this->db->update('siswa', $dataUpdate);
	 }

	 //
	public function ambilSiswa($nis){
		
		$this->db->where('nis', $nis);
		return $this->db->get('siswa')->row();
	}

	public function jumlahBayar($nisn){
		
		$this->db->like('nisn', $nisn);
		$this->db->select_sum('bulan_bayar');
		return $this->db->get('pembayaran')->row();
	}

	public function updateIdSpp($nisn, $dataUpdate){
		
		$this->db->where('nisn', $nisn);
		return $this->db->update('siswa', $dataUpdate);
	}

	public function dataTampil()
	{
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
		return $this->db->get()->result_array();
	}
}